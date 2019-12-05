@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
<form action="/action_page.php">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Company</label>
    <select class="form-control" id="exampleFormControlSelect1" required="">
      <?php foreach($user as $data){?>
      <option value="<?php echo $data->id; ?>">{{$data->company_name}}</option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="email">Add Employee</label>
    <input type="text" class="form-control" id="email">
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
  <a class="btn btn-info" href="{{ url('home') }}">Back</a>
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
