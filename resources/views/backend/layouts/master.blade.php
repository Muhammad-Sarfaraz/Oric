<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Home</title>


  <link rel="stylesheet" href="{{ asset('/') }}backend/plugins/fontawesome-free/css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}backend/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('/') }}backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  

  
 <link rel="stylesheet" href="{{ asset('/') }}css/app.css">

 <link href="{{ asset('/')}}css/toastr.css" rel="stylesheet">

 <link href="{{ asset('/')}}css/vendor.css?id=9681f7b105c94db4a1be" rel="stylesheet" type="text/css">
 @yield('header')
</head>
<body>
  @yield('style')




<body class="hold-transition sidebar-mini layout-fixed">
  
<div class="wrapper">
<section class="container-fluid bg-white ">

  <!-- Header -->
  @include('backend.includes.header')
  <!-- Header -->


  <!-- side bar -->
  @include('backend.includes.sidebar')
  <!-- side bar -->


  <div class="content-wrapper">
  <section class="container-fluid bg-white">
  <!-- BEGIN -->
   @yield('content')
   <!-- END OF CONTENT-->
   </div>

         <!-- BEGIN -->
  @include('backend.includes.footer')
      <!-- END OF FOOTER-->

      <div id ="app">
</div>

  


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/') }}backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}backend/dist/js/adminlte.min.js"></script>

<script src="{{ asset('/') }}backend/plugins/toastr/toastr.min.js"></script>







<script>
  @yield('script')
</script>


</body>
</html>


