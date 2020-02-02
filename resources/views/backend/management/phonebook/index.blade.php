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
              <h3 class="box-title">Student Form</h3>
              <div class="col-sm-12">
                    <div class="box-tools pull-right">
                    <a class="btn btn-info btn-sm" href="{{url('admin/management/phonebook/create')}}"><i class="fas fa-list-ul"></i>Add</a>
                    </div>
                </div><!-- /.col -->
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <br>


            @endsection