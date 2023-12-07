@extends('layout.app')
@section('content')
<div class="container">
    <h1>halo {{ $myname }} </h1>
    
    @if ($usia > 25)
    <h1>sudah dewasa</h1> 
    @else 
    <h1>belum dewasa</h1>
    @endif


    @foreach ($titles as$titles)
       <h1>{{ $title }}</h1> 
       @endforeach
       
</div>
@endsection