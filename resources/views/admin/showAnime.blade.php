@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.update', ['id' => $animeData->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <p>Title: <input type="text" name="title" value="{{ $animeData->title }}" required></p>
            <p>English title: <input type="text" name="english_title" value="{{ $animeData->english_title }}" required></p>
            <p>Synonyms: <input type="text" name="synonyms" value="{{ $animeData->synonyms }}" required></p>
            <p>Episodes: <input type="text" name="episodes" value="{{ $animeData->episodes }}" required></p>
            <p>Type: <input type="text" name="type" value="{{ $animeData->type }}" required></p>
            <p>Status: <input type="text" name="status" value="{{ $animeData->status }}" required></p>
            <p>Start date: <input type="date" name="start_date" value="{{ $animeData->start_date }}" required></p>
            <p>End date: <input type="date" name="end_date" value="{{ $animeData->end_date }}" required></p>
            <p>Synopsis: <input type="text" name="synopsis" value="{{ $animeData->synopsis }}" required></p>

            <img src="{{ $animeData->image }}" alt="">
            <br>
            <p>Image name: {{ $animeImg }}</p>
            <input type="file" name="image">
            <br>
            <button type="submit" class="ui button">Update anime</button>
        </div>
    </form>
@endsection