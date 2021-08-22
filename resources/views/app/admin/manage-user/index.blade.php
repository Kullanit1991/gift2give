@extends('app.admin.header')
@section('title', 'Dashboard')

@section('style')
    <style>

    </style>
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="userVue">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">User Management</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Management</li>
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
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>status</th>
                                    <th width="100px">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($user as $key => $value) { ?>
                                <tr>
                                    <td>{{  $user->firstItem() + $key }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>
                                        @if ($value->status == 'Y')
                                            <span style="color: green; font-weight: bold;">Active</span>
                                        @else
                                            <span style="color: red; font-weight: bold;">In Active</span>
                                        @endif
                                    </td>
                                    <td width="120px">
                                        <button type="button" class="btn" @click="viewItem({{$value->id}})"><i class="fas fa-eye"></i></button>
                                        <button type="button" class="btn" @click="editItem({{$value->id}})"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br />
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">{{ $user->links('pagination::bootstrap-4') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('app.vue.admin.user-manange')
@stop
@section('script')
    <script>
        $(document).ready(function() {

        });

    </script>
@stop
