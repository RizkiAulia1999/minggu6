@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $student->nim }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--Menampilkan View pada baris student berdasarkan ID-->
                    <img width="150px" src="{{asset('storage/'.$student->photo)}}"><br><br>
                  
                        <div class="card-body">
                            Name : {{ $student->name }} <br>
                            Class : {{ $student->kelas->class_name }} <br>
                            Department : {{ $student->department }} <br>
                            Phone Number : {{ $student->phone_number }} <br>
                            Created at : {{ $student->created_at }} <br>
                            Updated at : {{ $student->updated_at }} <br>
                        </div>
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
