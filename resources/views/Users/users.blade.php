<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 30px auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #e9f1f2; }
        .avatar { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; }
        .btn { padding: 6px 12px; background: #0066cc; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a> | <a href="/about">About</a> | <a href="/customers">Customers</a> | <a href="/users">Users</a>
    </nav>
    <h1>User Accounts</h1>
    <a href="/users/create" class="btn">+ Add New User</a>
    <table>
        <tr><th>Avatar</th><th>ID</th><th>Username</th><th>Full Name</th><th>Actions</th></tr>
        @foreach($users as $user)
        <tr>
            <td>
                @if($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" class="avatar">
                @else
                    <img src="https://via.placeholder.com/40" class="avatar">
                @endif
            </td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->full_name }}</td>
            <td><a href="/users/{{ $user->id }}/edit">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>