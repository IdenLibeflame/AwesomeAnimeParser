@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <br>
                        <hr>
                        @if(auth()->user()->isAnimeGod)
                            <a href="{{ route('admin') }}" class="ui primary button">Panel of Power</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <div align="center">
        <h1 align="center">Don't waste time - watch anime!</h1>
    </div>

        <time class="clock">
            <span class="clock__hand clock__hand--hour"></span>:
            <span class="clock__hand clock__hand--minute"></span>:
            <span class="clock__hand clock__hand--second"></span>

            <svg class="clock__face" aria-hidden="true" role="presentation">
                <circle class="clock__face-stroke"></circle>
            </svg>
        </time>
</div>

@endsection
