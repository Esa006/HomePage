<?php
session_start();
require "database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM user WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
     print_r($user);
     print_r($user);
   echo "<br>Email from form: " . $email;
   echo "<br>Password from form: " . $password;
  echo "<br>Password verify result: " . (password_verify($password, $user['password']) ? 'TRUE' : 'FALSE');

if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Invalid email or password!";
    }
}
?>

<h2>Login</h2>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required >
    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="register.php">Create one</a></p>
