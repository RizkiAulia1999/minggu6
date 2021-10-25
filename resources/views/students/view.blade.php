@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DETAIL STUDENT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--Menampilkan View pada baris student berdasarkan ID-->
                    <form action="/students/{{$student->id}}" method="get">
                        @csrf
                        <table class="table table-responsive">
                            <tr><th>NIM</th><th>:</th><td>{{ $student->nim }}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{$student->name}}</td></tr>
                            <tr><th>class</th><th>:</th><td>{{$student->class}}</td></tr>
                            <tr><th>Department</th><th>:</th><td>{{ $student->department}}</td></tr>
                            <tr><th>Phone Number</th><th>:</th><td>{{ $student->phone_number}}</td></tr>
                        </table>
                    </form>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
