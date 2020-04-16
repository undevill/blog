@extends('news.layouts.default')

@section('title', 'Show')

@section('content')
    <main role="main">
        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <h2 >{{ $post->title }}</h2>
                        <p>{{ $post->descr }} </p>
                        <p class="card-author h6">Автор: {{ $post->name }}</p>
                        <p><a class="btn btn-secondary" href="{{ route('news.index') }}" role="button">На главную</a></p>
                    </div>
            </div>

            <hr>

        </div>
    </main>


@endsection

