@extends('backend.layouts.master')
@section('content')


   
<br>
<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
        <div class="card bg-light-dark text-dark">
            
                <div class="card-header">
                  <h3 class="card-title">Add Images</h3>
                 
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data" >
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Image Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="" required placeholder="Image Title">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                      </div>

                      <label for="name" class="col-sm-3 control-label">Image Location</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="image" required placeholder="Uplaod Your Images" required>
                        
                      </div>
                    </div>
                    
            
                  <!-- /.card-body -->
                 
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
                </form>
              </div>
              </div>
              </div>
              </div>
</div>

          



@endsection

@section('script')

    @if(Session::has("status"))
      toastr.success("{{ Session::get('status')}}");

    @endif

    @error('title')
      toastr.error("{{ $message }}");
      
    @enderror

   
   
@endsection