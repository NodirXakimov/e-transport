@extends('layouts.master')
@section('additional_links')
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.min.css') }}">
    
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="currency float-left mr-1">$</span>
                            <span class="count">23569</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Revenue</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-6">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count float-left">85</span>
                            <span>%</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Dummy text here</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <div id="flotBar1" class="flotBar1"></div>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">6569</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Total clients</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg pe-7s-users"></i>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">1490</span>
                        </h3>
                        <p class="text-light mt-1 m-0">New users</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <div id="flotLine1" class="flotLine1"></div>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->
    </div>
    <div class="row pt-3"  style="background: rgb(240, 239, 239)">

        <div class="col-6">
            <h3 class="pb-3">Qayerdan</h3>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Viloyatni tanlang</strong>
                </div>
                <div class="card-body">

                  <select id="regionFrom" data-placeholder="Viloyatni tanlang..." class="standardSelect" tabindex="1">
                        <option value="" label="default"></option>
                        @if (isset($regions))
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}" label="default">{{ $region->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tumanni tanlang</strong>
                </div>
                <div class="card-body">

                  <select id="districtFrom" data-placeholder="Tumani tanlang..." class="standardSelect" tabindex="1">
                        <option value="" label="default"></option>
                        <option selected value="United States">United States</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-6">
            <h3 class="pb-3">Qayerga</h3>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Viloyatni tanlang</strong>
                </div>
                <div class="card-body">

                  <select id="regionTo" data-placeholder="Viloyatni tanlang..." class="standardSelect" tabindex="1">
                        <option value="" label="default"></option>
                        @if (isset($regions))
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}" label="default">{{ $region->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tumanni tanlang</strong>
                </div>
                <div class="card-body">

                  <select id="districtTo" data-placeholder="Tumani tanlang..." class="standardSelect" tabindex="1">
                        <option value="" label="default"></option>
                    </select>
                </div>
            </div>
        </div>
        
    </div>

@endsection

@section('additional_scripts')
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/lib/chosen/chosen.jquery.js') }}"></script>

<script>
    let regionFrom = null;
    let districtFrom = null;
    let regionTo = null;
    let districtTo = null;
    jQuery(document).ready(function($) {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
        
        // --- FROM
        $('#regionFrom').chosen().change(function(obj, res){
            regionFrom = res.selected;
            districtFrom = null;
            axios.get(`/regions/${res.selected}/districts`)
            .then(result => {
                let options = '<option value="" label="default"></option>';
                result.data.forEach(district => {
                    options += `<option value="${district.id}">${district.name}</option>`;
                });
                jQuery('#districtFrom').empty().append(options);
                jQuery('#districtFrom').trigger('chosen:updated');
            }).catch(err => {
                console.log(err);
            })
        });
        $('#districtFrom').chosen().change(function(obj, res){
            districtFrom = res.selected;
        });
        // --- END FROM

        // --- TO
        $('#regionTo').chosen().change(function(obj, res){
            regionTo = res.selected;
            districtTo = null;
            axios.get(`/regions/${res.selected}/districts`)
            .then(result => {
                let options = '<option value="" label="default"></option>';
                result.data.forEach(district => {
                    options += `<option value="${district.id}">${district.name}</option>`;
                });
                jQuery('#districtTo').empty().append(options);
                jQuery('#districtTo').trigger('chosen:updated');
            }).catch(err => {
                console.log(err);
            })
        });
        $('#districtTo').chosen().change(function(obj, res){
            districtTo = res.selected;
            console.log(regionFrom + " " + districtFrom + ' ' + regionTo + ' ' + districtTo);
        });
        // --- END TO


    });
</script>

@endsection