<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

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
        ]);
        return $request;
    }
}
