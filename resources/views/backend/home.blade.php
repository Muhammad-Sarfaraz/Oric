@extends('backend.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
  
    <div class="row">
    <div class="col-sm-4">
        <a href="http://www.ubh.com" class="tile purple">
          <h3 class="title">Purple Tile</h3>
          <p>Short, sweet data point goes here.</p>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="http://www.ubh.com" class="tile orange">
          <h3 class="title">Orange Tile</h3>
          <p>Short, sweet data point goes here.</p>
        </a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
        <a href="http://www.ubh.com" class="tile green">
          <h3 class="title">Green Tile</h3>
          <p>Short, sweet data point goes here.</p>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="http://www.ubh.com" class="tile green">
          <h3 class="title">Blue Tile</h3>
          <p>Short, sweet data point goes here.</p>
        </a>
    </div>
  </div>
</div>

</div>
</div>
</div>

</div>







                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
