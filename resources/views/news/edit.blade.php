@extends('news.layouts.default')

@section('title', 'Edit')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('news.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h2 class="text-center">Редактировать новость</h2>
            @include('news.layouts.blocks.form.form')
            <input type="submit" value="Редактировать новость" class="btn btn-secondary">
        </form>
    </div>
@endsection

