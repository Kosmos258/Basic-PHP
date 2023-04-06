<?php
session_start();

if (isset($_POST['register'])) {

  $pdo = new PDO('mysql:host=localhost;dbname=database_name', 'username', 'password');

  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
  $stmt->execute([$username]);
  $existing_user = $stmt->fetch();
  if ($existing_user) {
    $_SESSION['error_message'] = 'Пользователь с таким именем пользователя уже существует.';
    header('Location: signup.php');
    exit;
  }

  $stmt = $pdo->prepare('INSERT INTO users (name, username, password) VALUES (?, ?, ?)');
  $stmt->execute([$name, $username, $hashed_password]);

  $_SESSION['user_id'] = $pdo->lastInsertId();
  header('Location: index.php');
  exit;
} else {
  header('Location: signup.php');
  exit;
}
