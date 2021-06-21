@extends('layouts.master')
@section('additional_links')
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.min.css') }}">
    
@endsection
@section('content')
    {{-- <div class="row">
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
                        <i class="icon fade-5 icon-lg fa fa-plane"></i>
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
                        <i class="icon fade-5 icon-lg fa fa-train"></i>
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
                        <i class="icon fade-5 icon-lg fa fa-bus"></i>
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
                        <div id="flotLine1" class="flotLine1">
                            <i class="icon fade-5 icon-lg fa fa-users"></i>
                        </div>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->
    </div> --}}
    <div class="container">
        
        @php $i = 1; @endphp

        @if (isset($data) && $data['route1'] != null)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3 display-5"><span class="badge badge-warning">{{ $i++ }} - yo'nalish</span></h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center">{{ $data['route1']['districtFrom'] }}dan</div>
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center"><span><i class="fa fa-arrow-right"></i></span></div>
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center">{{ $data['route1']['toCenter'] }}gacha</div>
                                </div>
                                <div class="alert alert-success mt-4" role="alert">
                                    <div class="row align-items-center text-center">
                                        <div class="col-2">
                                            <div class="card-right float-right text-right">
                                                <i class="icon fade-5 icon-lg fa fa-bus"></i>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <h4>Kuniga 3 mahal</h4>
                                            <h4>Soat: 8:00, 12:00, 16:00</h4>
                                        </div>
                                        <div class="col-5">
                                            <h3><b>{{ rand(10, 15) }} 000</b> so'm</h3>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        @endif
        @if (isset($data) && $data['route2'] != null)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3 display-5"><span class="badge badge-warning">{{ $i++ }} - yo'nalish</span></h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center">{{ $data['route2']['fromRegionCenter'] }}dan</div>
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center"><span><i class="fa fa-arrow-right"></i></span></div>
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center">{{ $data['route2']['toRegionCenter'] }}gacha</div>
                                </div>
                                @if ($data['route2']['busPrice'] != null)
                                    <div class="alert alert-success mt-4" role="alert">
                                        <div class="row align-items-center text-center">   
                                            <div class="col-2">
                                                <div class="card-right float-right text-right">
                                                    <i class="icon fade-5 icon-lg fa fa-bus"></i>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h4>Kuniga 3 mahal</h4>
                                                <h4>Soat: 8:00, 12:00, 16:00</h4>
                                            </div>
                                            <div class="col-5">
                                                <h3><b>{{ $data['route2']['busPrice'] }}</b> so'm</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data['route2']['trainPrice'] != null)
                                    <div class="alert alert-warning" role="alert">
                                        <div class="row align-items-center text-center">   
                                            <div class="col-2">
                                                <div class="card-right float-right text-right">
                                                    <i class="icon fade-5 icon-lg fa fa-train"></i>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h4>Eng yaqin poyezd reysi</h4>
                                                <h4>{{ rand(21, 30) }}.06.2021 {{ rand(10, 22) }}:00</h4>
                                            </div>
                                            <div class="col-5">
                                                <h3><b>{{ $data['route2']['trainPrice'] }}</b> so'm</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data['route2']['planePrice'] != null)
                                    <div class="alert alert-danger" role="alert">
                                        <div class="row align-items-center text-center">   
                                            <div class="col-2">
                                                <div class="card-right float-right text-right">
                                                    <i class="icon fade-5 icon-lg fa fa-plane"></i>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h4>Eng yaqin aviareys</h4>
                                                <h4>{{ rand(21, 30) }}.06.2021 {{ rand(10, 22) }}:00</h4>
                                            </div>
                                            <div class="col-5">
                                                <h3><b>{{ $data['route2']['planePrice'] }}</b> so'm</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (isset($data) && $data['route3'] != null)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3 display-5"><span class="badge badge-warning">{{ $i++ }} - yo'nalish</span></h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center">{{ $data['route3']['toCenter'] }}dan</div>
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center"><span><i class="fa fa-arrow-right"></i></span></div>
                                    <div class="col-4 px-3 display-4" style="font-size: 30px; text-align:center">{{ $data['route3']['districtTo'] }}gacha</div>
                                </div>
                                <div class="alert alert-success mt-4" role="alert">
                                    <div class="row align-items-center text-center">   
                                        <div class="col-2">
                                            <div class="card-right float-right text-right">
                                                <i class="icon fade-5 icon-lg fa fa-bus"></i>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <h4>Kuniga 3 mahal</h4>
                                            <h4>Soat: 8:00, 12:00, 16:00</h4>
                                        </div>
                                        <div class="col-5">
                                            <h3><b>{{ rand(10, 15) }} 000</b> so'm</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3"></h4>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                </div>
            </div><!-- /# column -->
        </div><!-- /# row -->
    </div>

@endsection

@section('additional_scripts')
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/lib/chosen/chosen.jquery.js') }}"></script>

<script src="assets/js/init/chartjs-init.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/excanvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.time.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.stack.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.resize.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.crosshair.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot.curvedlines@1.1.1/curvedLines.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot.tooltip@0.9.0/js/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/init/chartjs-init.js"></script>
<script src="assets/js/init/flot-chart-init.js"></script> --}}




@endsection