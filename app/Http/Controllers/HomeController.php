<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\District;
use Illuminate\Http\Request;
use App\Imports\RegionsImport;
use App\Imports\DistrictsImport;
use App\Imports\PlanePriceImport;
use App\Imports\TrainPriceImport;
use App\Imports\BusPriceImport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $regions = Region::select('id', 'name')->orderBy('name')->get();
        return view('admin.main', ['regions' => $regions]);
    }

    public function ways(Request $request)
    {
        $validate = $request->validate([
                'regionFrom'    => 'required',
                'regionTo'      => 'required',
                'districtFrom'  => 'required',
                'districtTo'    => 'required'
            ],
            [
                'regionFrom.required'   => "Jo'nash viloyatini tanlang", 
                'regionTo.required'     => "Boradigan viloyatingizni tanlang", 
                'districtFrom.required' => "Jo'nash tuman yoki shahrini tanlang", 
                'districtTo.required'   => "Boradigan tuman yoki shahringizni tanlang", 
            ]
        );
        $regionFrom     = Region::findOrFail($request->regionFrom);
        $regionTo       = Region::findOrFail($request->regionTo);
        $districtFrom   = District::findOrFail($request->districtFrom);
        $districtTo     = District::findOrFail($request->districtTo);

        if($districtFrom->center){
            $route1['districtFrom'] = $districtFrom->name;
            $route1['toCenter'] = $regionFrom->districts->where('center', null)->first()->name;
        } else {
            $route1 = null;
        }
        $data['route1'] =  $route1;

        $route2['fromRegionCenter'] = $regionFrom->districts->where('center', null)->first()->name;
        $route2['toRegionCenter'] = $regionTo->districts->where('center', null)->first()->name;
        $route2['planePrice'] = $regionFrom->planePrice->where('regionTo', $request->regionTo)->first()->price;
        $route2['trainPrice'] = $regionFrom->trainPrice->where('regionTo', $request->regionTo)->first()->price;
        $route2['busPrice'] = $regionFrom->busPrice->where('regionTo', $request->regionTo)->first()->price;

        $data['route2'] = $route2;
        
        if($districtTo->center){
            $route3['districtTo'] = $districtTo->name;
            $route3['toCenter'] = $regionTo->districts->where('center', null)->first()->name;
        } else {
            $route3 = null;
        }
        $data['route3'] = $route3;

        return view('admin.result', ['data' => $data]);
    }

    public function importRegions(Request $request)
    {
        Excel::import(new RegionsImport,$request->file('file'));
        return redirect()->back();
    }
    public function importDistricts(Request $request)
    {
        Excel::import(new DistrictsImport,$request->file('file'));
        return redirect()->back();
    }
    public function importPlanePrice(Request $request)
    {
        Excel::import(new PlanePriceImport,$request->file('file'));
        return redirect()->back();
    }
    public function importTrainPrice(Request $request)
    {
        Excel::import(new TrainPriceImport,$request->file('file'));
        return redirect()->back();
    }
    public function importBusPrice(Request $request)
    {
        Excel::import(new BusPriceImport,$request->file('file'));
        return redirect()->back();
    }
}
