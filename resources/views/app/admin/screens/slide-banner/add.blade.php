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
                    <h1 class="m-0 text-dark">Add New Slide</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Screens Setting</li>
                        <li class="breadcrumb-item active">Home Screen Banner</li>
                        <li class="breadcrumb-item active">Slides</li>
                        <li class="breadcrumb-item active">Add New Slide</li>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div id="tab1" class="card-body">
                    <form action="{{ route('list-slides.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Sub Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Slide Image (1680x700
                                pixels)</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="picture" name="picture" onchange="loadPreview(this);">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Preview Image</label>
                            <div class="col-sm-10 text-left">
                                <img id="preview_img" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" width="100%" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">save</button>
                                <a href="{{ route('list-slides') }}" class="btn btn-secondary">cancel</a>
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
{{-- <script>
        $(document).ready(function() {

        });

    </script> --}}
@stop