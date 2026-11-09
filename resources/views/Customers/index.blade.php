<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 30px auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #e9f1f2; }
        .btn { padding: 6px 12px; background: #0066cc; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a> | <a href="/about">About</a> | <a href="/customers">Customers</a> | <a href="/users">Users</a>
    </nav>
    <h1>Customer Accounts</h1>
    <a href="/customers/create" class="btn">+ Add New Customer</a>
    <table>
        <tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td><a href="/customers/{{ $customer->id }}/edit">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>