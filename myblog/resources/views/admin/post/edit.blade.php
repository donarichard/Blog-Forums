@extends('admin.layout.app')

@section('headsection')

<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('main-section')



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
            @if (count($errors) > 0)

            @foreach($errors->all() as $error)

            <p class="alert alert-danger">{{$error}}</p>

            @endforeach

            @endif

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('post.update',$post->id)}}" method="post">
              @csrf

               {{method_field('PATCH')}}
              <div class="box-body">
              	<div class="col-lg-6">
              		
                   <div class="form-group">
                  <label for="exampleInputEmail1">Post Titile</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder=" Title" value="{{$post->title}}">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Sub Titile</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="subtitle" placeholder="Sub Title" value="{{$post->subtitle}}">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="slug" placeholder="slug" value="{{$post->slug}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="image" id="exampleInputFile">

                </div>
                 <div class="form-group">
                <label>Select Tags</label>
                <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select a Tags"
                        style="width: 100%;">

                        @foreach($tags as $tag)

                   
                  <option value="{{$tag->id}}"

                     @foreach($post->tag as $posttag)
                    @if($posttag->id == $tag->id)

                    selected

                    @endif

                    @endforeach


                    >{{$tag->name}}</option>

                  @endforeach

                </select>
              </div>
                <div class="form-group">
                <label>Select Category</label>
                <select class="form-control select2" name="categories[]" multiple="multiple" data-placeholder="Select a Category"
                        style="width: 100%;">

                        @foreach($categories as $category)

                  <option value="{{$category->id}}"
                     @foreach($post->category as $postcat)
                    @if($postcat->id == $category->id)

                    selected

                    @endif

                    @endforeach

                    >{{$category->name}}</option>

                  @endforeach

                </select>
              </div>
                                              <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1" @if ($post->status == 1)
                    checked

                    @endif>Publish
                  </label>
                </div>
              </div>

              	</div>
             <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>

                <textarea class="textarea" placeholder="Place some text here" value=""
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  name="body"  >{{$post->body}}</textarea>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          
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

@section('footersection')

<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script type="text/javascript">
  
  $(document).ready(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });


</script>

@endsection