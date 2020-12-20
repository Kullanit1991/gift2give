@extends('app.admin.header')
@section('title', 'Dashboard')

@section('style')
    <style>
        .container {
            position: relative;
            width: 100%;
            /* max-width: 400px; */
        }

        .container .inside img {
            width: 100%;
            height: auto;
        }

        .container .inside .btn {
            position: absolute;
            top: 92%;
            left: 92%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .container .btn:hover {
            background-color: black;
        }

    </style>
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home Screen Banner Set up</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item">Screens Setting</li>
                            <li class="breadcrumb-item active">Home Screen Banner</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <img src="{{ asset('banner_img/header.png') }}" width="100%" alt="Snow">
                            </div>
                            <div class="row">
                                <div class="inside">
                                <img src="{{ asset('banner_img/banner_slide.png') }}" width="100%" alt="Snow">
                                <button onclick="window.location='{{ url('admin/setting/home-screen/slides') }}'"  class="btn"><i class="fa fa-edit" aria-hidden="true"></i> Edit Slides</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop


@section('script')
    <script>
        $(document).ready(function() {

        });

    </script>
@stop
