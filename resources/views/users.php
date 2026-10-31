<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 40px auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #e9f1f2; }
    </style>
</head>
<body>
    @include('partials.nav')
    <h1>User Accounts</h1>
    <table>
        <thead>
            <tr><th>ID</th><th>Username</th><th>Full Name</th></tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
            </tr>
            @empty
            <tr><td colspan="3">No users found.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>