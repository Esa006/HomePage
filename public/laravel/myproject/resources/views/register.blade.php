<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Create Account</h2>

{{-- 1. Display General Errors (Custom session errors) --}}
@if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

{{-- 2. Display Validation Errors (Like 'Email taken' or 'Password mismatch') --}}
@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/register">
    @csrf

    <label>Name</label><br>
    <input type="text" name="name" value="{{ old('name') }}" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email') }}" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    {{-- 3. THIS FIELD WAS MISSING --}}
    <label>Confirm Password</label><br>
    <input type="password" name="password_confirmation" required><br><br>

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="/login">Login here</a></p>

</body>
</html>