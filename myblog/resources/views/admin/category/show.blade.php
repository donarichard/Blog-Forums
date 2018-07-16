@extends('admin/layout/app')

@section('headsection')

  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="box-header">
  <h3 class="box-title"></h3>
  <a href="{{route('category.create')}}" class="col-lg-offset btn btn-success">Add New Category</a>
</div>
      <!-- Default box -->
        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($cat as $cats)

                 <tr>
                  <td>{{$loop->index + 1}}</td>
                  <td>{{$cats->name}}
                  <td>{{$cats->slug}}</td>
                 <td><a href="{{route('category.edit',$cats->id)}}"><span class="fa fa-fw fa-edit"></span></a></td>

                  <form id="delete-form{{$cats->id}}" method="post" action="{{route('category.destroy',$cats->id)}}">
                    @csrf
                   {{method_field('DELETE')}}
                  <td><button onclick="alert('Are You sure want to delete')" 


                    > <span class="fa fa-fw fa-trash"></span></button></td>
                 </tr>
                 </form>
                  @endforeach
              
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection

@section('footersection')

<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection