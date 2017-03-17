<?php

for ($i = 0; $i < 50; $i++) {
    $random50[] = rand(1, 100);
}
//echo '<pre>';
//print_r($random50);

$descriptor1 = fopen('text.csv', 'w+');
fputcsv($descriptor1, $random50);
fclose($descriptor1);

$descriptor2 = fopen('text.csv', 'r');
$data = fgetcsv($descriptor2, 1000, ',');
$sum = 0;
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]%2 === 0){
        $sum += $data[$i];
    } else {
        continue;
    }
}

echo "Сумма всех четных чисел - $sum";
