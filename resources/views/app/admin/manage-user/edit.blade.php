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
                        <h1 class="m-0 text-dark">User Management</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Management</li>
                            <li class="breadcrumb-item active">Edit User</li>
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
                            <form action="{{ route('setting-user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" value="{{$user->id}}" name="id" >
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" placeholder="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="subtitle" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Email" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="subtitle" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea  class="form-control" id="address" name="address" placeholder="Address">{{$user->home_address}}</textarea>
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Profile Image (only 500MB)</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="profile" name="profile" onchange="loadPreview(this);">
                                        
                                        @error('profile')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Preview Image</label>
                                    <div class="col-sm-10 text-left">
                                       @if ($user->profile_photo_path != null)
                                        <img id="preview_img" src="{{ asset("user_profile/$user->profile_photo_path") }}" width="50%" />
                                        @else
                                        <img id="preview_img" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" width="50%" />
                                        @endif
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">save</button>
                                        <a href="{{ url('/setting-user') }}" class="btn btn-secondary">cancel</a>
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
