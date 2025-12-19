<?php
session_start();

/* Protect page: user must be logged in */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

<p>You have successfully logged in.</p>

<ul>
    <li><strong>User ID:</strong> <?php echo $_SESSION['user_id']; ?></li>
    <li><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></li>
</ul>

<a href="logout.php">Logout</a>

</body>
</html>
