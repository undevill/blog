@extends('news.layouts.default')

@section('title', 'News')

@section('content')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="row justify-content-center ">
                <h1 class="display-3 ">Новостной портал</h1>

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5">
            @if(isset($_GET['search']))
                @if(count($posts)>0)
                    <h2>Результат поиска по запросу "<?=htmlspecialchars($_GET['search'])?>"</h2>
                @else
                    <h2>По запросу "<?=htmlspecialchars($_GET['search'])?>" ничего не найдено</h2>
                @endif
            @endif
            </div>
        </div>
        <div class="container"><!-- Example row of columns -->
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">
                        <h2 >{{ $post->title }}</h2>
                        <p>{{ $post->descr }} </p>
                        <p class="card-author h6">Автор: {{ $post->name }}</p>
                        <p><a class="btn btn-secondary" href="{{ route('news.show', ['id'=>$post->post_id]) }}"
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
