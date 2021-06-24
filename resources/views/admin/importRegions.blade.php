@extends('layouts.master')
@section('additional_links')
    <link rel="stylesheet" href="{{secure_asset('assets/css/lib/chosen/chosen.min.css') }}">
    
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="currency float-left mr-1"></span>
                            <span class="count">569</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Joriy oydagi reyslar soni</p>
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
                            <span class="count float-left">625</span>
                            <br>
                        </h3>
                        <p class="text-light mt-1 m-0">Poyezd reyslari soni</p>
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
                            <span class="count">2485</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Avtobus qatnovlari soni</p>
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
                            <span class="count">121</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Foydalanuvchilar soni</p>
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
    </div>  

    <form method="POST" action="{{ route('importRegions') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-primary" value="Submit">
        </div>

    </form>
@endsection

@section('additional_scripts')
<script src="{{secure_asset('assets/js/main.js') }}"></script>
<script src="{{secure_asset('assets/js/lib/chosen/chosen.jquery.js') }}"></script>


@endsection