@extends('layouts.master')
@section('additional_links')
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    
@endsection
@section('content')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Temir yo'l reyslari</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Qayerdan</th>
                                    <th>Qayerga</th>
                                    <th>Qachon</th>
                                    <th>Qancha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Termiz</td>
                                    <td>Andijon</td>
                                    <td>30.06.2021</td>
                                    <td>150 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Toshkent</td>
                                    <td>Qarshi</td>
                                    <td>24.06.2021</td>
                                    <td>80 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Samarqand</td>
                                    <td>Toshkent</td>
                                    <td>28.06.2021</td>
                                    <td>50 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Toshkent</td>
                                    <td>Nukus</td>
                                    <td>27.06.2021</td>
                                    <td>120 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Urganch</td>
                                    <td>Samarqand</td>
                                    <td>28.06.2021</td>
                                    <td>55 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Jizzax</td>
                                    <td>Toshkent</td>
                                    <td>25.06.2021</td>
                                    <td>45 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Namangan</td>
                                    <td>Nukus</td>
                                    <td>27.06.2021</td>
                                    <td>160 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Navoiy</td>
                                    <td>Toshkent</td>
                                    <td>30.06.2021</td>
                                    <td>75 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Urganch</td>
                                    <td>Andijon</td>
                                    <td>29.06.2021</td>
                                    <td>240 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Jizzax</td>
                                    <td>Nukus</td>
                                    <td>27.06.2021</td>
                                    <td>210 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Toshkent</td>
                                    <td>Buxoro</td>
                                    <td>27.06.2021</td>
                                    <td>155 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>Termiz</td>
                                    <td>Toshkent</td>
                                    <td>24.06.2021</td>
                                    <td>260 000 so'm</td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2021 MyWay Inc.
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://mywaylaravelapp.herokuapp.com/">MyWay team</a>
            </div>
        </div>
    </div>
</footer>
@endsection

@section('additional_scripts')
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>


@endsection