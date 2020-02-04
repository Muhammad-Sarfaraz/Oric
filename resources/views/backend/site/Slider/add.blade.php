@extends('backend.layouts.master')
@section('content')

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">My Dashboard</li>
</ol>




<br>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-light-dark text-dark">

          <div class="card-header">
            <h3 class="card-title">Add Images</h3>

          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group row">
                <label for="name" class="col-sm-3 control-label">Title</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="" required placeholder="Image Title">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>

                <label for="name" class="col-sm-3 control-label">Image</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="image" required placeholder="Uplaod Your Images" required>

                </div>
                <label for="name" class="col-sm-3 control-label">Order</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="order" required placeholder="Image Order" required>

                </div>


              </div>



              <!-- /.card-body -->

              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-8">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Slider Images</h3>
          </div>


          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  
                      

                  <th style="width:80px;">SL#</th>
                  <th>Title</th>
                  <th style="width:150px;">View</th>
                  <th style="width:150px;">Action</th>


                </tr>
              </thead>
              <tbody>

                <?php $number = 1; ?>
                @forelse($images as $image)
                <tr>
                  <td>{{ $number }}</td>
                  <?php $number++; ?>
                  <td style="display:none;">{{$image->title}}</td>
                  <td style="display:none;"></td>

                  <td>{{ $image->title }}</td>
                  <td>

                    <div class="col-md-12">
                      <img src="{{ Storage::url($image->image) }}" alt="" width="150px">
                     
                    </td>
                  <td>
                    <div class="col-md-12">


      <button type="button" onclick="location.href='{{ url('/admin/slider/delete/') }}/{{$image->id}}';"  class="dmctg btn btn-danger btn-xs">Delete</button>
                  </td>
                </tr>
                @empty
@endforelse
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

        </tbody>
        </table>
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