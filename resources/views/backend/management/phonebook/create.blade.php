@extends('backend.layouts.master')


@section('header')
<style>
hr.style1{
	border-top: 1px solid #8c8b8b;
}

</style>
@endsection

@section('content')
<section class="content">
<section class="container-fluid bg-white">
      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Phone</h3>
              <div class="col-sm-12">
                    <div class="box-tools pull-right">
                    <a class="btn btn-info btn-sm" href="{{url('admin/management/phonebook/')}}"><i class="fas fa-list-ul"></i>  View Phonebook</a>
                    </div>
                </div><!-- /.col -->
            </div>
            </div>
            </div>
            </div>
            <br>


<!-- Horizontal Form -->
<div class="container-fluid pt-3 border bg-white text-black">
    <div class="row">
    <div class="col-sm-12">
    <div class="col-md-12">
    
  <h2>Phone Number Registration Form</h2>
  <br>




 
  <form action="{{route('phonebook.store')}}" method="post" enctype="multipart/form-data">
   @csrf
  <div class="form-group row">
      
      <div class="col-xs-4">
        <label for="ex1">Name</label>
        <input class="form-control" type="text" name="name" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">occupation</label>
        <input class="form-control" type="text" name="occupation" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">E-mail</label>
        <input class="form-control" type="text" name="email" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">Adress</label>
        <input class="form-control" type="text" name="adress" required>
      </div>
      
<div class="col-xs-4">
  <label for="">Note</label>
  <input type="class" class="form-control" rows="1" name="note" required>
</div> 


<div class="col-xs-12">
<br>
<input type="submit" class="btn btn-danger" value="submit form">
<br>
<br>
</div>
    </div>
  </form>
</div>


  

          </div>
          </div>
          </div>
          </div>
          <br>
          <br>
          <br>
          <br>

          <!-- /.box -->
@endsection

@section('script')

    @if(Session::has("status"))
      toastr.success("{{ Session::get('status')}}");

    @endif

    @error('title')
      toastr.error("{{ $message }}");
      
    @enderror

   
   
@endsection