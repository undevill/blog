@extends('news.layouts.default')

@section('title', 'User')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('news.file', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h2 class="text-center">Редактировать профиль</h2>
            @include('news.layouts.blocks.form.userform')
            <input type="submit" value="Редактировать профиль" class="btn btn-secondary">
        </form>
    </div>
@endsection
