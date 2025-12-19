<?php
require "database.php";

if (!isset($_GET['id'])) {
    die("User ID is required");
}

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

header("Location: index.php");
exit;
