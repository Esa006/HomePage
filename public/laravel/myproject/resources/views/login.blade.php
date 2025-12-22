<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
<p id="error-msg" style="color:red"></p>

<form id="loginForm">
    @csrf
    <label>Email</label><br>
    <input type="email" id="email" required><br><br>
    <label>Password</label><br>
    <input type="password" id="password" required><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>