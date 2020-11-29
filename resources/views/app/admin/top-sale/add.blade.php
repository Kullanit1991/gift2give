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
                        <h1 class="m-0 text-dark">Add Top Sale Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Top Sale Management</li>
                            <li class="breadcrumb-item active">Add Top Sale Product</li>
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
                        <form action="{{ route('top-sale.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="menu_id" class="col-sm-2 col-form-label">Categories</label>
                                <div class="col-sm-10">
                                    <select name="topsale_id" id="topsale_id" class="form-control">
                                        <option selected disabled="" value="0">- Please Choose... -</option>
                                        @foreach ($submenu as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Total Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price" placeholder="price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sale_price" class="col-sm-2 col-form-label">Special price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="sale_price" name="sale_price"
                                        placeholder="sale price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-3 col-form-label">Product Image (255x291
                                    pixels)</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="picture" name="picture">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">save</button>
                                    <a href="{{ route('top-sale') }}" class="btn btn-secondary">cancel</a>
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
@stop


@section('script')
    <script>
        $(document).ready(function() {

        });

    </script>
@stop
