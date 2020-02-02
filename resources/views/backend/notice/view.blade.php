
@extends('backend.layouts.master')



@section('content')


<section class="content">
<div class="container-fluid pt-3 border bg-white text-black">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">View Bordered Table</h3>
              <div class="col-sm-12">
                    <div class="box-tools pull-right">
                        <a class="btn btn-info btn-sm" href="{{url('admin/notice/add')}}"><i class="fas fa-plus"></i> Add New</a>
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


  <!-- /.card-header -->
  
  <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>

                      <th style="width:20px;">SL#</th>
                      <th style="width:30px;">Date</th>
                      <th style="width:200px;">Title</th>
                      <th style="width:300px;">Description</th>
                      
                      
                      <th style="width:100px;">Action</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                 
                  <?php $number = 1; ?>
                  @foreach($notices as $notice)
                  
                      <tr>
                        <td>{{ $number }}</td>
                        <?php $number++; ?>
                        <td> {{$notice->pdate}} </td>
                        
                        <td> {!! $notice->title !!} </td>
                        <td> {!! $notice->description !!} </td>
                        <td>
                          <button type="button" onclick="location.href='{{url('admin/notice/edit/')}}/{{$notice->id}}'"  class=" btn btn-warning btn-xs" >Edit</button>
                            <button type="button" onclick="location.href='{{url('admin/notice/delete/')}}/{{$notice->id}}'"  class=" btn btn-danger btn-xs" >Delete</button>
                        </td>
                      </tr>
                      @endforeach         
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            </tbody>
        </table>



        
    <br>
    <br>
    <br>
    <br>



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