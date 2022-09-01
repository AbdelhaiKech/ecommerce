@extends('layouts.masteruser')

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
                    <div class="col-md-12">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-46 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">Profil</strong>

                                <h5 class="mb-0">
                                    <strong class="d-inline-block mb-2 text-dark">Name : </strong> {{$user->name}}</h5>
                                <h5 class="mb-0"> <strong class="d-inline-block mb-2 text-dark">Phone : </strong>
                                    {{$user->phone}}</h5>
                                <h5 class="mb-0"><strong class="d-inline-block mb-2 text-dark">Adresse : </strong>
                                    {{$user->adresse}}</h5>


                                @if($user->usertype == 0)
                                <h5><strong class="d-inline-block mb-2 text-dark">Type : </strong><span class="badge bg-success text-light">User</span></h5>
                                @else
                                
                                <h5><strong class="d-inline-block mb-2 text-dark">Type : </strong><span class="badge bg-danger text-light">Admin</span></h5>
                                @endif

                            </div>

                            <div class="col-auto d-none d-lg-block">
                                <img class="card-img-left example-card-img-responsive"
                                    src="https://cdn.pixabay.com/photo/2022/08/26/22/01/bee-7413333_960_720.jpg"
                                    style="    width: 300px;" />
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
