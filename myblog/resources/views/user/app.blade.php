<!DOCTYPE html>
<html lang="en">

  <head>

@include('user/layout/head')

  </head>

  <body>

   @include('user/layout/nav')

  
 @include('user/layout/header')

   @section('main-content')
   @show

    <hr>

@include('user.layout.footer')
  </body>

</html>
