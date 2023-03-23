<?php

//1 задание

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$res = array_map(function ($i) {
  return $i & 1 ? "чётное" : "нечётное";
}, $arr);

print_r($res);

//2 задание

$numbers = [4, 7, 2, 9, 1, 5];

function getMinMaxAvg(array $numbers): array
{
  $max = max($numbers);
  $min = min($numbers);
  $avg = array_sum($numbers) / count($numbers);
  return [$max, $min, $avg];
}

$result = getMinMaxAvg($numbers);
print_r($result);
