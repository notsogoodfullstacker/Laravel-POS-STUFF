<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Edit User</title>
    <style>body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; }</style>
</head>
<body>
    <h1>Edit User</h1>
    @if ($errors->any())
        <ul style="color: red;">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    @endif
    <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p>Username: <input type="text" name="username" value="{{ old('username', $user->username) }}"></p>
        <p>Full Name: <input type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}"></p>
        <p>Avatar Image: <input type="file" name="avatar"></p>
        <button type="submit">Update User</button>
    </form>
</body>
</html>
