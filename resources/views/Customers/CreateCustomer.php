<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Add Customer</title>
    <style>body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; }</style>
</head>
<body>
    <h1>Add New Customer</h1>
    @if ($errors->any())
        <ul style="color: red;">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    @endif
    <form action="/customers" method="POST">
        @csrf
        <p>Full Name: <input type="text" name="full_name" value="{{ old('full_name') }}"></p>
        <p>Email: <input type="email" name="email" value="{{ old('email') }}"></p>
        <p>Phone: <input type="text" name="phone" value="{{ old('phone') }}"></p>
        <button type="submit">Save Customer</button>
    </form>
</body>
</html>