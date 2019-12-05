

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
						        <th>Logo</th>
						        <th>Website</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach($company as $companys)	
						      <tr>
						        <td>{{ $companys->name }}</td>
						        <td>{{ $companys->email }}</td>
						        <td><img width="100" height="100" src="{{asset('storage/'.$companys->logo)}}"></img></td>
						        <td>{{ $companys->website }}</td>
						        <td>
						        	<form action="{{ route('Company.destroy',[$companys->id]) }}" method="post">
						        		    @method('DELETE')
    										@csrf
    										<button>Del</button>
						        	</form>
						        	<form action="{{ route('Company.edit',[$companys->id]) }}" method="get">
						        		    
    										@csrf
    										<button>edit</button>
						        	</form>
						        </td>
						      </tr>
						    @endforeach 
						    </tbody>
						  </table>

                </div>
				{{ $company->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
