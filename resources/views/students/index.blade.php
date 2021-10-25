@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/students/create" class="btn btn-primary">Add Data</a> 
                    <br><br> 
                    <!--fitur search data-->
                    <div class="row">
                        <form action="/students" class="form-inline" method="get">
                            <div class="form-group mx-sm-3 mb-3">
                                <input name="keyword" type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-3">Cari</button>
                            </div> 
                        </form>
                    </div>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>class</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $s)
                            <tr>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->class }}</td>
                                <td>{{ $s->department }}</td>
                                <td>
                                <form action="/students/{{$s->id}}" method="post"> 
                                    <a href="/students/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button type=>
                                    <a href="/students/{{$s->id}}" class="btn btn-warning">View</a>
                                </form>     
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
