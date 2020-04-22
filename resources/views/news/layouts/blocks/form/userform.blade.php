<div class="form-group">
    <lable class="h4">Имя</lable>
    <input type="text" class="form-control mt-2" name="name" required value="{{ old('name') ?? $user->name ?? ""}}">
</div>

