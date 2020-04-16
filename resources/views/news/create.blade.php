@extends('news.layouts.default')

@section('title', 'Create')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <h2 class="text-center">Добавить новость</h2>
            <div class="form-group">
                <lable class="h4">Заголовок новости</lable>
                <input type="text" class="form-control mt-2" name="title" required>
            </div>
            <div class="form-group">
                <lable class="h4">Текст новости</lable>
                <textarea name="descr" rows="10" class="form-control mt-2" required></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" required>
            </div>

            <input type="submit" value="Добавить новость" class="btn btn-outline-success">
        </form>
    </div>
@endsection
