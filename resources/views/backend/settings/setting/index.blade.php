@extends('backend.layouts.master')

@section('content')
<section class="content">
    <section class="container-fluid bg-white">
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Website Information</h3>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <main>

            <form action="{{route('site.setting.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="Title" name="title" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="Facebook" name="facebook">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="Twitter" name="twitter">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" class="form-control" placeholder="Youtube" name="youtube">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Adress</label>
                            <input type="text" class="form-control" placeholder="Adress" name="adress" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Copyright Text</label>
                            <input type="text" class="form-control" placeholder="Copyright Text" name="wfooter" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control" placeholder="logo" name="wlogo" required>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </main>
        <!-- /main -->
        
@endsection

@section('script')

@if(Session::has("status"))
toastr.success("{{ Session::get('status')}}");

@endif

@error('title')
toastr.error("{{ $message }}");

@enderror

@endsection