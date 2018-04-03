@extends('layouts.app')

@section('content')

    <a href="{{ route('admin.create') }}" class="massive ui button">Add new anime!</a>

    @forelse($animes as $anime)
        {{--    @method('delete')--}}
        <div>
            <img src="{{ $anime->image }}" alt="...">
            <div class="caption">
                <h4>"{{ $anime->title }}"</h4>
                <cite><h4 align="left">{{ $anime->english_title }}</h4></cite>
                <cite><h4 align="left">{{ $anime->id }}</h4></cite>
                <p>Episode: {{ $anime->episodes }}</p>
            </div>
        </div>
        <form action="{{ route('admin.destroy', ['id' => $anime->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="ui button">Destroy!</button>
        </form>
        {{--    <a href="{{ route('admin.destroy', ['id' => $anime->id]) }}" class="ui button" data-method="delete" data-token="{{csrf_token()}}">Уничтожить</a>--}}
    @empty
    @endforelse
    <div align="center">{!! $animes->render() !!}</div>
@endsection