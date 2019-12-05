@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
<form action="{{ route('Company.store') }}" 
method="post" enctype="multipart/form-data" >
    @csrf
  <div class="form-group">
    <label for="email">Company Name</label>
    <input name="name" type="text" class="form-control" id="email" required >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" class="form-control" id="email" required >
  </div>
  <div class="form-group">
    <label for="email">Logo</label>
    <input name="logo" type="file" class="form-control" id="email" required >
  </div>
  <div class="form-group">
    <label for="email">Website</label>
    <input name="website" type="text" class="form-control" id="email" required >
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
  <a class="btn btn-info" href="{{ url('home') }}">Back</a>
  <a class="btn btn-info" href="{{ route('Company.index') }}">List</a>
</form>

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
