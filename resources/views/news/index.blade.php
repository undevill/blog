@extends('news.layouts.default')

@section('title', 'News')

@section('content')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                @forelse($news as $news)
                <div class="col-md-4">
                    <h2>{{ $news['headers'] }}</h2>
                    <p>{{ $news['content'] }} </p>
                    <p><a class="btn btn-secondary" href="#" role="button">{{ $news['button'] }}</a></p>
                </div>
                 @empty
                    No News
                @endforelse
            </div>

            <hr>

        </div> <!-- /container -->

    </main>
@endsection
