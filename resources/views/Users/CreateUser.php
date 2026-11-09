<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <style>body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; }</style>
</head>
<body>
    <h1>Create New User</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/users" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Username: <input type="text" name="username" value="{{ old('username') }}"></p>
        <p>Full Name: <input type="text" name="full_name" value="{{ old('full_name') }}"></p>
        <p>Avatar Image (Max 2MB): <input type="file" name="avatar"></p>
        <button type="submit">Save User</button>
    </form>
</body>
</html>