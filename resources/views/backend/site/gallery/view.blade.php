@extends('backend.layouts.master')


@section('header')

  <!--Shard Theme -->
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('/')}}backend/css/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="{{asset('/')}}backend/css/extras.1.1.0.min.css">





@endsection


@section('style')

<!-- Child Page css goes here  -->
<style>
    .thumbnail img {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        max-height: 300px;
        min-height: 300px;
    }

    .thumbnail .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .thumbnail:hover img {
        opacity: 0.3;
    }

    .thumbnail:hover .middle {
        opacity: 1;
    }

    .thumbnail:hover .middle .remove-image {
        color: #ff0000;
    }
</style>
@endsection
<!-- Child Page css -->


@section('content')

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{route('/')}}">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Gallery</li>
</ol

<section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              
              <div class="col-md-12">
                    <div class="box-tools pull-right">
                        <a class="btn btn-info btn-sm" href="{{url('admin/gallery/add_image')}}"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                </div><!-- /.col -->
            </div>






<div class="col-md-12">
        <div class="card bg-white text-dark">
            
                <div class="card-header">
                  <h3 class="card-title">Gallery</h3>
                 
                </div>


        <div class="box-body">

            <div class="row">
                <div class="col-md-12">
                    @forelse($images as $image)
                    <div class="col-xs-6 col-md-3 thumbnail">
                        <img class="img-responsive" src="{{ Storage::url('gallery/'.$image->image) }}" alt="image">
                        <div class="middle">
                            <a href="{{url('admin/gallery/delete/'.$image->id)}}" data-id="9" class="remove-image" title="Delete Image"><i class="fas fa-trash fa-2x"></i> </a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</section>

@endsection

@section('script')

    @if(Session::has("status"))

      toastr.info("{{ Session::get('status')}}");

    @endif

    @error('title')
      toastr.error("{{ $message }}");
      
    @enderror

   
   
@endsection