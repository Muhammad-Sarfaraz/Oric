
@extends('backend.layouts.master')



@section('content')

@include('backend.includes.tinymce')


<section class="content">
<div class="container-fluid pt-3 border bg-white text-black">
      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Notice</h3>
              <div class="col-sm-12">
                    <div class="box-tools pull-right">
                    <a class="btn btn-info btn-sm" href="{{url('admin/notice')}}"><i class="fas fa-list-ul"></i>  View Notice</a>
                    </div>
                </div><!-- /.col -->
            </div>

<!-- Position of box -->

        <div class="col-md-12">
        <div class="card bg-white text-dark">
    <div class="card-header">
      <h3 class="card-title">Notice</h3>
    </div>
<!-- Position of box -->

  <!-- form start -->
  
  <form action="{{url('/admin/notice/create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter The Title Here">
    </div>
    <div class="form-group">
    <label for="">Description</label>
                <textarea name="description" rows="0" cols="0"></textarea>
                <script>
                        CKEDITOR.replace( 'description' );
                </script>
    </div>
    <div class="box-footer">
                <button type="publish" class="btn btn-primary">Submit</button>
    </div
</form>
<br>
</div>
</div>
</div>
</section>


        @endsection


        @section('script')

    @if(Session::has("status"))
      toastr.success("{{ Session::get('status')}}");

    @endif

    @error('title')
      toastr.error("{{ $message }}");
      
    @enderror

   
   
@endsection