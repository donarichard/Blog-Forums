<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layout.head')

</head>
<body class="hold-transition skin-blue sidebar-mini">
	
<div class="wrapper">


@include('admin.layout.header')

@include('admin.layout.sidebar')


  @section('main-content')

  @show

  @section('main-section')

  @show

@include('admin.layout.footer')

</div>

</body>
</html>