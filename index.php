<?php 

$user_name = readline("Твоё имя?");
$user_age = readline("Твой возраст?");

$task_1 = readline("Какое твоё первое занятие?");
$a = readline ("Сколько времени это занимает в минутах?");
$task_2 = readline("Какое твоё второе занятие?");
$b = readline ("Сколько времени это занимает в минутах?");
$task_3 = readline("Какое твоё третье задание?");
$c = readline ("Сколько времени это занимает в минутах?");
$result = $a + $b + $c;

echo "Твоё имя $user_name и твой возраст $user_age\n";

echo "$user_name, у тебя есть 3 занятия
$task_1 за $a минуты
$task_2 за $b минуты
$task_3 за $c минуты
твои задания занятия около $result";
