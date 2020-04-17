<div class="form-group">
    <lable class="h4">Заголовок новости</lable>
    <input type="text" class="form-control mt-2" name="title" required value="{{ old('title') ?? $post->title ?? ""}}">
</div>
<div class="form-group">
    <lable class="h4">Текст новости</lable>
    <textarea name="descr" rows="10" class="form-control mt-2" required>{{ old('descr') ?? $post->descr ?? "" }}</textarea>
</div>

