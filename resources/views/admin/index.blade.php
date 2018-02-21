@extends('layouts.admin')

@section('body')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Overview of Site Activities</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            {{--  --}}
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

@stop

@section('scripts')
    <script>
        $('#dashboard').addClass('active');
    </script>
@stop
