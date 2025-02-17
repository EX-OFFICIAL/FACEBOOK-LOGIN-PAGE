<?php
session_start();
header("Content-Type: application/json");

$users = [
    "user@example.com" => "darkforce71",
    "test@darkforce71.com" => "mr.ex"
];

$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

if (isset($users[$email]) && $users[$email] === $password) {
    $_SESSION["user"] = $email;
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>