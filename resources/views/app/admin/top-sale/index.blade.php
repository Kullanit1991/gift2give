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
                        <h1 class="m-0 text-dark">Top Sale Management</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Top Sale Management</li>
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
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link {{ !isset($_GET['tab']) ? 'active' : '' }}" data-toggle="tab" role="tab" href="#tab1">Top Sale Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ isset($_GET['tab']) ? 'active' : '' }}" data-toggle="tab" role="tab" href="#tab2">Top Sale Lists</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">

                        <div class="tab-content">
                            <div class="tab-pane {{ !isset($_GET['tab']) ? 'fade show active' : '' }} " id="tab1" role="tabpanel">

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
                                        <div class="col col-lg-2">
                                          <?php if (count($type) < 4) { ?>
                                            <a href="{{ url('top-sale-add-type') }}" class="btn btn-primary" ><i
                                                    class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <br />
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Top Sale Categorie</th>
                                            <th>Status</th>
                                            <th width="150px">Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (count($type) > 0) {
                                        foreach ($type as $key => $value) { ?>
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>
                                                @if ($value->status == 'Y')
                                                    <span style="color: green; font-weight: bold;">Active</span>
                                                @else
                                                    <span style="color: red; font-weight: bold;">In Active</span>
                                                @endif
                                            </td>
                                            <td><button type="button" class="btn btn-secondary">Edit</button>
                                              <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                        </tr>
                                        <?php }
                                        } else {
                                        ?>
                                        <tr>
                                            <td colspan="4">No data</td>
                                        </tr>

                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                               

                                {{-- <br />
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8"> {{ $menu->links('pagination::bootstrap-4') }}</div>
                                    </div>
                                </div> --}}

                            </div>
                            <div class="tab-pane {{ isset($_GET['tab']) ? 'fade show active' : '' }}" id="tab2" role="tabpanel">

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
                                        <div class="col col-lg-2">
                                            <a href="{{ url('top-sale-add') }}" class="btn btn-primary"><i
                                                    class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>

                                        </div>
                                    </div>
                                </div>
                                <br />
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th width="250px"></th>
                                            <th>Categories</th>
                                            <th>Name</th>
                                            <th>Desc</th>
                                            <th>Price</th>
                                            <th>Special Price</th>
                                            <th>status</th>
                                            <th width="150px">Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (count($goods) > 0) {
                                        foreach ($goods as $key => $value) { ?>
                                        <tr>
                                            <td><img src="product_img/{{ $value->product_photo_path }}" width="50%" /></td>
                                            <td>{{ $value->type_name }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->description }}</td>
                                            <td>{{ $value->price }}</td>
                                            <td>{{ $value->sale_price }}</td>
                                            <td>
                                                @if ($value->status == 'Y')
                                                    <span style="color: green; font-weight: bold;">Active</span>
                                                @else
                                                    <span style="color: red; font-weight: bold;">In Active</span>
                                                @endif
                                            </td>
                                            <td><button type="button" class="btn btn-secondary">Edit</button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <?php }
                                        } else {
                                        ?>
                                        <tr>
                                            <td colspan="7">No data</td>
                                        </tr>

                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                                <br />
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8">{{ $goods->appends(['tab' => '2'])->links('pagination::bootstrap-4') }}</div>
                                    </div>
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
