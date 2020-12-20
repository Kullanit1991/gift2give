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
                        <h1 class="m-0 text-dark">Menu Management</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Menu Management</li>
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
                                <a class="nav-link {{ !isset($_GET['tab']) ? 'active' : '' }}" data-toggle="tab" role="tab" href="#tab1">Menus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ isset($_GET['tab']) ? 'active' : '' }}" data-toggle="tab" role="tab" href="#tab2">Sub Menus</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane {{ !isset($_GET['tab']) ? 'fade show active' : '' }}" id="tab1" role="tabpanel">

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
                                          <?php if (count($menu) < 4) { ?>
                                            <a href="{{ url('setting-menu-add') }}" class="btn btn-primary" ><i
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
                                            <th>Menu Name</th>
                                            <th>Status</th>
                                            <th width="150px">Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (count($menu) > 0) {
                                        foreach ($menu as $key => $value) { ?>
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->menu_name }}</td>
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
                                        <div class="col col-lg-2 text-right">
                                            <a href="{{ url('setting-menu-add-submenu') }}" class="btn btn-primary"><i
                                                    class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>

                                        </div>
                                    </div>
                                </div>
                                <br />
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>SubMenu Name</th>
                                            <th>Main Menu</th>
                                            <th>Status</th>
                                            <th width="200px">Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (count($submenu) > 0) {
                                        foreach ($submenu as $key => $value) { ?>
                                        <tr>
                                            <td>{{ $submenu->firstItem() + $key }}</td>
                                            <td>{{ $value->submenu_name }}</td>
                                            <td>{{ $value->menu_name }}</td>
                                            <td>
                                                @if ($value->status == 'Y')
                                                    <span style="color: green; font-weight: bold;">Active</span>
                                                @else
                                                    <span style="color: red; font-weight: bold;">In Active</span>
                                                @endif
                                            </td>
                                            <td><button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <?php }
                                        } else {
                                        ?>
                                        <tr>
                                            <td colspan="5">No data</td>
                                        </tr>

                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                                <br />
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8"> {{ $submenu->appends(['tab' => '2'])->links('pagination::bootstrap-4') }}</div>
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
