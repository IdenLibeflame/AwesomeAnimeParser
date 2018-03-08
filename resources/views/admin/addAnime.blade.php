@extends('layouts.app')

@section('content')
    <form action="{{ route('addAnime') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>Title: <input type="text" name="title" required></p>
        <br>
        <p>English title: <input type="text" name="english_title" required></p>
        <br>
        <p>Synonyms: <input type="text" name="synonyms" required></p>
        <br>
        <p>Episodes: <input type="text" name="episodes" required></p>
        <br>
        <p>Type: <input type="text" name="type" required></p>
        <br>
        <p>Status: <input type="text" name="status" required></p>
        <br>
        <p>Start_date: <input type="date" name="start_date" required></p>
        <br>
        <p>End_date: <input type="date" name="end_date" required></p>
        <br>
        <p>Synopsis: <input type="text" name="synopsis" required></p>
        <br>
        <p>Image: <input type="file" name="image" required></p>
        <br>
        <button type="submit" class="ui button">Add new anime</button>
    </form>
@endsection