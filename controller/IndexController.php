<?php
require_once 'model/User.php';
session_start();
$pageHeader = 'Добро пожаловать в TODO';

$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
}

include "view/index.php";
