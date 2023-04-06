<?php
include "model/User.php";
include "model/UserProvider.php";
require_once 'db.php';

$pdo = new PDO('sqlite:database.db');

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$user = new User('admin');
$user->setName('Ember Song');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');

// Создание таблицы tasks
$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    isDone TINYINT(1) NOT NULL DEFAULT '0'
)";

if ($pdo->exec($sql) !== false) {
  echo "Таблица задач создана успешно.\n";
} else {
  echo "Ошибка при создании табличных задач: " . $pdo->errorInfo()[2] . "\n";
}
