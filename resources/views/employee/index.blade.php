

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Employee List 
                    <a class="btn btn-info" href="{{ route('home') }}" >Home</a>

                </div>

                <div class="card-body">

                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    	<table class="table">
						    <thead>
						      <tr>
						        <th>Firstname</th>
						        <th>Lastname</th>
						        <th>Email</th>
						        <th>Phone</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach($employee as $employees)	
						      <tr>
						        <td>{{ $employees->first_name }}</td>
						        <td>{{ $employees->last_name }}</td>
						        <td>{{ $employees->email }}</td>
						        <td>{{ $employees->phone }}</td>
						        <td>
						        	<form action="{{ route('Employee.destroy',[$employees->id]) }}" method="post">
						        		    @method('DELETE')
    										@csrf
    										<button>Del</button>
						        	</form>
						        </td>
						        <td>
						        	<form action="{{ route('Employee.edit',[$employees->id]) }}" method="get">
						        		    
    										@csrf
    										<button>edit</button>
						        	</form>
						        </td>
						      </tr>
						    @endforeach 
						    </tbody>
						  </table>

                </div>
				{{ $employee->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
