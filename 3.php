<?php

// 1 задание

$array1 = [2, 5, 8, 1, 4, 6, 7, 3, 9, 2];
$array2 = [1, 9, 3, 6, 2, 8, 4, 7, 5, 1];

$result = [];

for ($i = 0; $i < count($array1); $i++) {
  $result[$i] = $array1[$i] * $array2[$i];
}

print_r($result);

// 2 задание

$wishes = ["счастья", "здоровья", "успеха", "любви", "благополучия"];
$adjectives = ["бесконечного", "крепкого", "безудержного", "безграничного", "неистощимого"];

echo "Введите имя именинника: ";
$name = trim(fgets(STDIN));

$rand_wish = $wishes[array_rand($wishes)];
$rand_adj = $adjectives[array_rand($adjectives)];

$greeting = "Дорогой " . $name . ", от всего сердца поздравляю тебя с днем рождения, желаю " . $rand_adj . " " . $rand_wish . ", " . $adjectives[array_rand($adjectives)] . " " . $wishes[array_rand($wishes)] . " и " . $adjectives[array_rand($adjectives)] . " " . $wishes[array_rand($wishes)] . "!";

echo $greeting;

//3 задание

$students = [
  'ИТ20' => [
    'Иванов Иван' => 5,
    'Кириллов Кирилл' => 3,
    'Петров Петр' => 4,
    'Сидоров Сидор' => 4,
  ],
  'БАП20' => [
    'Антонов Антон' => 4,
    'Борисов Борис' => 3,
    'Викторов Виктор' => 2,
    'Григорьев Григорий' => 5,
    'Валерий Иванов' => 1,
    'Миша Мишин' => 2,
    'Петя Васие' => 3,
    'Максим Максимов' => 4,
  ]
];

$max_average = 0;
$max_group = '';
foreach ($students as $group => $grades) {
  $sum = 0;
  $count = 0;
  foreach ($grades as $grade) {
    $sum += $grade;
    $count++;
  }
  $average = $sum / $count;
  echo "Средняя оценка в группе $group: $average\n";
  if ($average > $max_average) {
    $max_average = $average;
    $max_group = $group;
  }
}
echo "Группа с наивысшей средней оценкой: $max_group\n";

$expelled = [];
foreach ($students as $group => $grades) {
  foreach ($grades as $student => $grade) {
    if ($grade < 3) {
      $expelled[$group][] = $student;
    }
  }
}
echo "Список студентов на отчисление:\n";
print_r($expelled);
