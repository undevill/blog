@extends('news.layouts.default')

@section('title', 'Create')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <h2 class="text-center">Добавить новость</h2>
            @include('news.layouts.blocks.form.form')

            <input type="submit" value="Добавить новость" class="btn btn-secondary">
        </form>
    </div>
@endsection
