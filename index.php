<?php

$user_name = readline("Твоё имя?");
$user_age = readline("Твой возраст?");

echo "Твоё имя $user_name и твой возраст $user_age\n";

while (true) {
  $num_tasks = (int)readline("Сколько сегодня у вас задач (введите положительное число): ");
  if (!is_numeric($num_tasks) || $num_tasks <= 0) {
    echo "Ошибка: введено некорректное значение. Повторите ввод.\n";
    continue;
  }
  break;
}

$tasks_list = array();

for ($i = 0; $i < $num_tasks; $i++) {
  $tasks = (string)readline("Какая задача запланирована?");
  $tasks_list[] = $tasks;
  $time_tasks = (int)readline("Сколько примерно часов займёт задача?");
}

$time_tasks_result = $num_tasks * $time_tasks;


echo "$user_name у тебя сегодня $num_tasks задач/задачи.\n";
echo "Список задач:\n";
foreach ($tasks_list as $tasks) {
  echo $tasks . "\n";
}
echo "они займут $time_tasks_result часов/часа";
