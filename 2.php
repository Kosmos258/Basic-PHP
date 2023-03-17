// 1 задание
<?php

$question = "В каком году произошло крещение Руси?";
$answer1 = "1. 810 год";
$answer2 = "2. 988 год";
$answer3 = "3. 837 год";

$coorect_answer = 2;

echo "$question
 $answer1
 $answer2
 $answer3\n";

while (true) {
  $user_input = readline("Выберите правильный ответ");

  if ($user_input == 1) {
    echo "Неверный ответ.\n";
    break;
  } elseif ($user_input == 2) {
    echo "Правильный ответ, поздравляем!\n";
    break;
  } elseif ($user_input == 3) {
    echo "Неверный ответ.\n";
    break;
  } else {
    echo "Введён некорректный запрос.\n";
  }
};
?>

// 3 задание

<?php
while (true) {
  $num = readline("Введите положительное число: ");
  if (!is_numeric($num) || $num <= 0) {
    echo "Ошибка: введено некорректное значение. Повторите ввод.\n";
    continue;
  }
  break;
}

$fingers = ["большой", "указательный", "средний", "безымянный", "мизинец"];

$finger_num = ($num - 1) % 8;

echo "Палец, соответствующий числу $num, это {$fingers[$finger_num]}\n";
?>