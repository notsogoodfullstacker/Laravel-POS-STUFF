<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Home</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; text-align: center; }
        nav a { margin: 0 15px; text-decoration: none; color: #0066cc; font-weight: bold; }
        .error { color: red; margin-top: 10px; }
        .success { color: green; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Welcome to the POS System</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customers</a>
        <a href="/users">Users</a>
    </nav>

    <hr style="margin: 30px 0;">

    <h3>Quick Validation Form</h3>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <form action="/welcome-action" method="POST">
        @csrf
        <p>
            Enter Search / Code (Min 3 chars): 
            <input type="text" name="quick_search" value="{{ old('quick_search') }}">
        </p>
        <button type="submit">Validate Input</button>
    </form>
</body>
</html>