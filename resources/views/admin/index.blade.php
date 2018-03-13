@extends('layouts.app')

@section('content')

<a href="{{ route('admin.create') }}" class="massive ui button">Add new anime!</a>

@forelse($animes as $anime)
    <div class="thumbnail">
        <img src="{{ $anime->image }}" alt="...">
        <div class="caption">
            <h4>"{{ $anime->title }}"</h4>
            <cite><h4 align="left">{{ $anime->english_title }}</h4></cite>
            <p>Episode: {{ $anime->episodes }}</p>
        </div>
    </div>
    <a href="{{ route('admin.show', ['id' => $anime->id]) }}">Show</a>
@empty
@endforelse
<div align="center">{!! $animes->render() !!}</div>
@endsection