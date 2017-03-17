<?php
error_reporting(0);
// ------Первый пункт задания
$arr = array(
    'Массив1' => array(1, 1, 1, 1, 1),
    'Массив2', 'Массив3'
);

echo '<pre>';
print_r($arr);

echo $json = json_encode($arr, JSON_UNESCAPED_UNICODE);

$desc1 = fopen('output.json', 'w');
echo 'Записано байт  ->  '.fwrite($desc1, $json);
fclose($desc1);

echo '<br><br>';
// ------Второй пункт задания
$desc2 = fopen('output.json', 'r');
$json = fread($desc2, filesize('output.json'));
$content = json_decode($json, TRUE);
echo 'Изменять массив или нет(1 - да / 0 - нет):  '.$toggle = mt_rand(0, 1);
if ($toggle) {
    $content[] = 'Новый массив';
}
echo '<pre>';
print_r($content);


$desc3 = fopen('output2.json', 'w');
$json = json_encode($content, JSON_UNESCAPED_UNICODE);
echo 'Записано байт  ->  '.fwrite($desc3, $json);

echo '<br><br>';
// ------Третий пункт задания

$arrayDiff = array_diff($content, $arr);
echo 'Отличие массив друг от друга: <pre>';
print_r($arrayDiff);