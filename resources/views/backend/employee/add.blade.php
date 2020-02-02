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
              <h3 class="box-title">employee Form</h3>
              <div class="col-sm-12">
                    <div class="box-tools pull-right">
                    <a class="btn btn-info btn-sm" href="{{url('admin/employee')}}"><i class="fas fa-list-ul"></i>  View Employee</a>
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
    
  <h2>Employee Registration Form</h2>
  <br>




 
  <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
   @csrf
  <div class="form-group row">
      
      <div class="col-xs-3">
        <label for="ex1">Employee Name</label>
        <input class="form-control" type="text" name="Name" required>
      </div>
      
      <div class="col-xs-2">
        <label for="ex3">Nationality</label>
        <input class="form-control" name="nationality" type="text" required>
      </div>
      <div class="col-xs-2">
        <label for="ex2">Employee ID</label>
        <input class="form-control" name="employeeid"  type="text" required>
      </div>
      <div class="col-xs-2">
        <label for="ex2">Password</label>
        <input class="form-control" name="password"  type="text" required>
      </div>
      <div class="col-xs-2">
        <label for="ex2">Blood Group</label>
        <input class="form-control" name="bloodgroup"  type="text" required>
      </div>
      
      
      <div class="col-xs-4">
      <br>
        <label for="ex2">Passport/NID.</label>
        <input class="form-control" name="nid"  type="text" required>
      </div>
      <div class="col-xs-3">
      <br>
        <label for="ex1">Father's Name</label>
        <input class="form-control" name="fathername"  type="text" required>
      </div>
      
      <div class="col-xs-3">
      <br>
        <label for="ex1">Mother's Name</label>
        <input class="form-control" name="mothername"  type="text" required>
      </div>
      <div class="col-xs-2">
        <br>
        <label for="ex2">Religion</label>
        <input class="form-control" name="religion"  type="text" required>
      </div>
      <br>
      <div class="col-xs-3">
      <br>
        <label for="ex2">Undergraduate Institute</label>
        <input class="form-control" name="institute"  type="text" required>
      </div>
      <div class="col-xs-3">
      <br>
        <label for="ex2">Subject</label>
        <input class="form-control" name="subject"  type="text" required>
      </div>
      <div class="col-xs-1">
        <br>
        <label for="ex2">CGPA</label>
        <input class="form-control" name="cgpa"  type="text" required>
      </div>
      <div class="col-xs-2">
        <br>
        <label for="ex2">Graduation Year</label>
        <input class="form-control" name="year"  type="text" required>
      </div>
      <div class="col-xs-3">
        <br>
        <label for="ex2">Emergency Phone/Mobile No.</label>
        <input class="form-control" name="emergencycontact"  type="text" required>
      </div>

      <hr class="style1">
<br>

      <div class="col-xs-4">
      <br>
  <label for="">Present Adress</label>
  <textarea class="form-control" rows="3" name="pressentaddress"required ></textarea>
</div> 
<div class="col-xs-4">
<br>
  <label for="">Permanent Adress</label>
  <textarea class="form-control" rows="3" name="permanentaddress" required></textarea>
</div> 
<div class="col-xs-2">
<br>
  <label for="">Note</label>
  <textarea class="form-control" rows="3" name="note" required></textarea>
</div> 


<div class="col-xs-2">
<br>
  <label for="">Position</label>
  <input type="text" class="form-control" name="position" required>
</div> 


<div class="col-xs-4">
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