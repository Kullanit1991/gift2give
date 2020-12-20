@extends('app.admin.header')
@section('title', 'Dashboard')

@section('style')
    <style>


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
                        <h1 class="m-0 text-dark">All Slide Uloaded</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item">Screens Setting</li>
                            <li class="breadcrumb-item active">Home Screen Banner</li>
                            <li class="breadcrumb-item active">Slides</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                @if (session('alert'))
                    <div class="row mb-2">
                        <div class="col-sm-12">

                            <div class="alert alert-success">
                                {{ session('alert') }}
                            </div>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                @endif
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="container">

                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                </div>
                                <div class="col-md-auto">
                                </div>
                                <div class="col col-lg-2 text-right">
                                    <a href="{{ url('/admin/setting/home-screen/slides/add') }}" class="btn btn-primary"><i
                                            class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>


                                </div>
                            </div>
                        </div>
                        <br />
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Slide No.</th>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th width="150px">Action</th>
                                </tr>

                            </thead>
                            <tbody>

                                @if (count($data) > 0)

                                @foreach ($data as $key => $item)

                                <tr>
                                    <td>{{  $data->firstItem() + $key }}</td>
                                    <td><img src="{{ asset("banner_img/$item->banner_photo_path") }}" width="50%"/></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->subtitle }}</td>
                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                    
                                @endforeach
                                   
                                @else
                               
                                <tr>
                                    <td colspan="5">No data</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <br />
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-1">
                                <a href="{{ route('home-screen') }}" class="btn btn-default">Back</a>
                            </div>

                        </div>
                        <br />
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">{{ $data->links('pagination::bootstrap-4') }}</div>
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
    {{-- <script>
        $(document).ready(function() {

        });

    </script> --}}
@stop
