@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
<form action="{{ route('Employee.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Company</label>
    <select name="company" class="form-control" id="exampleFormControlSelect1" required="">
      <?php foreach($user as $data){?>
      <option value="<?php echo $data->id; ?>">{{$data->name}}</option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="email">First name</label>
    <input name="first_name" type="text" class="form-control" id="email">
  </div>
    <div class="form-group">
    <label for="email">Last Name</label>
    <input name="last_name" type="text" class="form-control" id="email">
  </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email">
  </div>
    <div class="form-group">
    <label for="email">Phone</label>
    <input name="phone" type="text" class="form-control" id="email">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <a class="btn btn-info" href="{{ url('home') }}">Back</a>
  <a class="btn btn-info" href="{{ route('Employee.index') }}" >List</a>
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
