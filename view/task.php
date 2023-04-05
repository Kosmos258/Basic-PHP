<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>

<body>
   <h1><?= $pageHeader ?></h1>

   <?php include 'menu.php' ?>

   <h2>Задачи</h2>

   <?php foreach ($tasks as $task) : ?>
      <div>
         <?= $task ?> [Done]
      </div>
   <?php endforeach; ?>

</body>