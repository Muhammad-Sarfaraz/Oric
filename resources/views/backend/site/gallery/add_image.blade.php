@extends('backend.layouts.master')


@section('header')

  <!--Shard Theme -->
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('/')}}backend/css/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="{{asset('/')}}backend/css/extras.1.1.0.min.css">





@endsection



@section('content')

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Gallery</li>
</ol>

<section class="content">

<div class="col-md-12">
                    <div class="box-tools pull-right">
                        <a class="btn btn-info btn-sm" href="{{url('admin/gallery/view')}}"><i class="fab fa-envira"></i> View Image</a>
                    </div>
                

        <div class="col-md-6">
        <div class="card bg-light text-dark">
            
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

          
</sectio>


@endsection

@section('script')

    @if(Session::has("status"))
      toastr.success("{{ Session::get('status')}}");

    @endif

    @error('title')
      toastr.error("{{ $message }}");
      
    @enderror

   
   
@endsection