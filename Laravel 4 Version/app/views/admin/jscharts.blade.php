@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
JS Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link rel="stylesheet" href="{{ asset('assets/css/pages/jscharts.css') }}" />
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Charts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Home
            </a>
        </li>
        <li>Charts</li>
        <li class="active">JS Charts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-6">
            <!-- Basic charts strats here-->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Bar Chart
                    </h4>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div>
                        <canvas id="bar-chart" width="800" height="300" ></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Basic charts strats here-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Polar Area Chart
                    </h4>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div>
                        <canvas id="polar-area-chart" width="800" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Line Chart
                    </h4>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div>
                        <canvas id="line-chart" width="800" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Basic charts strats here-->
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Radar Chart
                    </h4>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div>
                        <canvas id="radar-chart" width="800" height="300" ></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Basic charts strats here-->
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Donut Chart
                    </h4>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div>
                        <canvas id="doughnut-chart" width="800" height="300" ></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Basic charts strats here-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Pie  Charts
                    </h4>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div>
                        <canvas id="pie-chart" width="800" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row --> 
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<script src="{{ asset('assets/vendors/jscharts/Chart.js') }}"></script>
<script src="{{ asset('assets/js/pages/chartjs.js') }}"></script>
@stop