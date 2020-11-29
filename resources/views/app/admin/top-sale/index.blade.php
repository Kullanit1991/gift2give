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
                                <a class="nav-link active" href="#tab1">Top Sale Type</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2">Top Sale Management</a>
                            </li>
                        </ul>
                    </div>
                    <div id="tab1" class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Type Name</th>
                                    <th>Detail</th>
                                    <th>status</th>
                                    <th width="100px">Action</th>
                                </tr>
                                <?php if (count($goods) > 0) {
                                foreach ($goods as $key => $value) { ?>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>Active</td>
                                    <td></td>
                                </tr>
                                <?php }
                                } else {
                                ?>
                                <tr >
                                    <td colspan="5">No data</td>
                                </tr>

                                <?php
                                } ?>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
