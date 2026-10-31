<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 40px auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #e9f1f2; }
    </style>
</head>
<body>
    @include('partials.nav') <!-- Or include the navbar snippet above -->
    <h1>Customer Accounts</h1>
    <table>
        <thead>
            <tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th></tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
            @empty
            <tr><td colspan="4">No customers found.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>

<nav style="margin-bottom: 20px; padding: 10px; background: #f4f4f4;">
    <a href="/" style="margin-right: 15px;">Home</a>
    <a href="/about" style="margin-right: 15px;">About</a>
    <a href="/customers" style="margin-right: 15px;">Customer Accounts</a>
    <a href="/users">User Accounts</a>
</nav>
</html>