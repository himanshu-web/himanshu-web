@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
Edit Employee

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('Employee.update',[$employee->id]) }}" method="post">
                      @method('PATCH')
                      @csrf
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Company</label>
                        <select name="company" class="form-control" id="exampleFormControlSelect1" required="">
                       @foreach( $company as $c_name)
                       <option value="{{$c_name->id}}" >{{$c_name->name}}</option>
                       @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="email">First name</label>
                        <input name="first_name" value="{{$employee->first_name}}" type="text" class="form-control" id="email">
                      </div>
                        <div class="form-group">
                        <label for="email">Last Name</label>
                        <input name="last_name" value="{{$employee->last_name}}" type="text" class="form-control" id="email">
                      </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" value="{{$employee->email}}" type="email" class="form-control" id="email">
                      </div>
                        <div class="form-group">
                        <label for="email">Phone</label>
                        <input name="phone" value="{{$employee->phone}}" type="text" class="form-control" id="email">
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                      {{-- <a class="btn btn-info" href="{{ url('home') }}">Back</a>
                      <a class="btn btn-info" href="{{ route('Employee.index') }}" >List</a>
                     --}}</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
