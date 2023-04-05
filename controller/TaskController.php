<?php
require_once 'model/User.php';
session_start();

$pageHeader = 'Добро пожаловать!';


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
}

$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUserName();
}

$tasks = [
  'Погулять с собакой',
  'Починить компьютер'
];

require_once 'view/task.php';
