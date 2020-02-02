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
              <h3 class="box-title">Library</h3>
              <div class="col-sm-12">
                    <div class="box-tools pull-right">
                    <a class="btn btn-info btn-sm" href="{{url('admin/student/')}}"><i class="fas fa-list-ul"></i>Book List</a>
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
    
  <h2>Book Registration Form</h2>
  <br>




 
  <form action="{{route('library.store')}}" method="post" enctype="multipart/form-data">
   @csrf
  <div class="form-group row">
      
      <div class="col-xs-4">
        <label for="ex1">Book Title</label>
        <input class="form-control" type="text" name="title" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">ISBN</label>
        <input class="form-control" type="text" name="isbn" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">Author</label>
        <input class="form-control" type="text" name="author" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">Publisher</label>
        <input class="form-control" type="text" name="publisher" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">Issue date</label>
        <input class="form-control" type="text" name="issuedate" required>
      </div>
      <div class="col-xs-4">
        <label for="ex1">Qty</label>
        <input class="form-control" type="text" name="qty" required>
      </div>
      
<div class="col-xs-4">
<br>
  <label for="">Note</label>
  <textarea class="form-control" rows="3" name="note" required></textarea>
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