@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    <form action="{{ route('Company.store') }}" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="email">Add Company</label>
                        <input name="company_name" type="text" class="form-control" id="email" required >
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
