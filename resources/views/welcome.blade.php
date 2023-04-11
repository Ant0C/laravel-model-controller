@extends('layouts.app')

@section('content')

    @forelse ($movies as $item)
        <div>
            <h1>{{ $item -> title}}</h1>
        </div>
    @empty

    @endforelse

@endsection