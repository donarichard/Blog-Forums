@extends('admin/layout/app')


@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
       <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if (count($errors) > 0)

            @foreach($errors->all() as $error)

            <p class="alert alert-danger">{{$error}}</p>

            @endforeach

            @endif            
            <form role="form" action="{{route('tag.store')}}" method="post">
              @csrf
              <div class="box-body">
              	<div class="col-lg-6">
              		
                   <div class="form-group">
                  <label for="exampleInputEmail1">Tag Titile</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Title">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="slug" placeholder="Sub Title">
                </div>
              
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('tag.index')}}"  class="btn btn-default">Back</a>
              </div>
            </div>
            </form> 
              <!-- /.box-body -->

              
           
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection