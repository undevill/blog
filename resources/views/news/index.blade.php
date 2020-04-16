@extends('news.layouts.default')

@section('title', 'News')

@section('content')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3 mx-auto">Новостной портал</h1>
                <p>This is a template for a simple marketing or informational website.
                    It includes a large callout called a jumbotron and three supporting
                    pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Далее &raquo;</a></p>
            </div>
        </div>

        <div class="container"><!-- Example row of columns -->
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">
                        <h2 >{{ $post->title }}</h2>
                        <p>{{ $post->descr }} </p>
                        <p class="card-author h6">Автор: {{ $post->name }}</p>
                        <p><a class="btn btn-secondary" href="{{ route('news.show', ['id'=>$post->id]) }}"
                              role="button">Посмотреть</a></p>
                </div>
                @endforeach
            </div>
            @if(!isset($_GET['search']))
            {{ $posts->links() }}
            @endif
            <hr>

        </div>
    </main>


@endsection
