@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">name : {{$user->name}}</li>
                        <li class="list-group-item">Telephone : {{$user->phone}}</li>
                        <li class="list-group-item">Adresse : {{$user->adresse}}</li>
                        @if({{$user->usertype}} == 0)
                         <li class="list-group-item">Role : User</li>
                         @else
                         <li class="list-group-item">Role : Admin</li>
                        @endif
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
