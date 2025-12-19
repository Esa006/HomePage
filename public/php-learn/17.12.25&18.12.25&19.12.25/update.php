<?php
require "database.php";

if (!isset($_GET['id'])) {
    die("User ID is required");
}

$id = $_GET['id'];


$sql = "SELECT * FROM user WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("User not found");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE user SET username = :username, email = :email
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $_POST['username'],
        ':email'    => $_POST['email'],
        ':id'       => $id
    ]);
    echo "User updated successfully!";

}
?>

<form method="POST">
    <input type="text" name="username" value="<?= $user['username'] ?>" required>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <button type="submit">Update User</button>
</form>
