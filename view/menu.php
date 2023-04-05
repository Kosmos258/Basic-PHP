<a href="/?controller=home">Главня страница</a>
<a href="/?controller=task">Задачи</a>

<?php if ($username !== null) : ?>
  <p>Рады Вас приветствовать, <?= $username ?>.<br>
    <a href="/?action=logout">Выйти</a>
  </p>
<?php endif ?>