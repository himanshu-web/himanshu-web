@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
Edit Company

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('Company.update',[$company->id]) }}" method="post">
                      @method('PATCH')
                      @csrf
                
                      <div class="form-group">
                        <label for="email">Name</label>
                        <input name="name" value="{{$company->name}}" type="text" class="form-control" id="email">
                      </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" value="{{$company->email}}" type="text" class="form-control" id="email">
                      </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input name="logo"  type="file" class="form-control" id="email">
                      </div>
                        <div class="form-group">
                        <label for="email">Phone</label>
                        <input name="website" value="{{$company->website}}" type="text" class="form-control" id="email">
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
