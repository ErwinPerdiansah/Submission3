@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('success'))
    <div clss="alert alert-success">
        <div>{{ session('success') }}</div>
    </div> 
    @endif 
    
    <div class="sm:fixed sm:top-0 p-6 text-right z-10">
        <h4 class="{{ route('repository.create') }}" class="btn btn-dark">create</a>
        <table class="table">
        <thead>
            <tr>

    <h6 class="display-6">Data Repositori</h6>
    <td><a href='' class="btn btn-primary float right">create</a></td>
            </tr>
        </thead>
    </table>
</div>

    <table class="table">
        <thead>
            <tr>
                <th class="col-md-1">no</th>
                <th class="col-md-3">title</th>
                <th class="col-md-4">author</th>
                <th class="col-md-2">year</th>
                <th class="col-md-2">description</th>
                <th class="col-md-2">option</th>
            </tr>
        </thead>
        <tbody>
            @foreach (repositories as $index => $repository)
            <tr> 
                <td>{{ $index }}</td>
                <td>{{ $repository->title }}</td>
                <td>{{ $repository->author }}</td>
                <td>{{ $repository->year }}</td>
                <td>{{ $repository->description }}</td>
                <td>
                    <a href="#" class="nav-link text-success">edit</a>
                    <a href="#" class="nav-link text-danger">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection