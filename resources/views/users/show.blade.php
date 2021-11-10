@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->username }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                        <div class="card-body">
                            Username : {{ $user->username }} <br>
                            Name : {{ $user->name }} <br>
                            Email : {{ $user->email }} <br>
                            Role : {{ $user->role }} <br>
                            Created at : {{ $user->created_at }} <br>
                            Updated at : {{ $user->updated_at }} <br>
                        </div>
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
