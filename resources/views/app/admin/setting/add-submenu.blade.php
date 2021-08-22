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
                        <h1 class="m-0 text-dark">Add New Sub Menu</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Menu Management</li>
                            <li class="breadcrumb-item active">Add New Sub Menu</li>
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

                    <div id="tab1" class="card-body">
                        <form action="{{ route('setting-menu.store.submenu') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="menu_id" class="col-sm-2 col-form-label">Menu Main</label>
                                <div class="col-sm-10">
                                    <select name="menu_id[]" id="menu_id[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                       
                                        @foreach ($menu as $item)
                                            <option value="{{ $item->id }}">{{ $item->menu_name }}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sub_name" class="col-sm-2 col-form-label">Sub Menu Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sub_name" name="sub_name"
                                        placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">save</button>
                                    <a href="{{ url('setting-menu') }}" class="btn btn-secondary">cancel</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

    </script>
@stop
