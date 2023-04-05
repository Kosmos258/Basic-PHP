<head>
  <meta charset="UTF-8">
  <title>Главная</title>
</head>

<body>
  <h1><?= $pageHeader ?></h1>

  <?php if ($username !== null) : ?>
    <p>Рады Вас приветствовать, <?= $username ?>.<br>
      <a href="/?action=logout">Выйти</a>
    </p>
    <a href="/?controller=home">Главня страница</a></p>
  <?php else : ?>
    <p>Авторизуйтесь</p>
    <a href="/?controller=security">Войти</a>
  <?php endif ?>

</body>