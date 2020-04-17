@extends('news.layouts.default')

@section('title', 'Show')

@section('content')
        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <h2 class="mt-3">{{ $post->title ?? "Новость удалена"}}</h2>
                        <p>{{ $post->descr ?? ""}} </p>
                        <p class="card-author h6">Автор: {{ $post->name ?? ""}}</p>
                            <div class="input-group">
                                 <a class="btn btn-secondary mr-3" href="{{ route('news.index') }}" role="button">Назад</a>
                                @auth
                                    @if(Auth::user()->id == $post->author_id)
                                 <a class="btn btn-secondary mr-3" href="{{ route('news.edit', ['id'=>$post->post_id]) }}"
                                   role="button">Редактировать</a></span>
                                 <form action="{{ route('news.destroy', ['id'=>$post->post_id]) }}" method="post"
                                 onsubmit="if (confirm('Точно удалить новость?')) {return true} else {return false}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-secondary" value="Удалить">
                                </form>
                                     @endif
                                @endauth
                            </div>
                        </div>
                    </div>
            </div>
            <hr>




@endsection

