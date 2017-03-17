<?php
//error_reporting(0);
//echo "<pre>";
//print_r(curl_version());
//echo '<br><br>';

$url = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
$curl = curl_init('');
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($curl);
$result = json_decode($result, true);
//$info = curl_getinfo($curl);

//echo $info['url'].'  ---------------   '.$info['total_time'].'<br><br>';
//echo '<pre>';
//print_r($result);

//echo 'Если есть ошибка CURL, то вот ее номер - '.curl_errno($curl);
echo '<br><br>';

curl_close($curl);


function FindAssocKey($key, $array)
{
    if (is_array($array)) {
        if (array_key_exists($key, $array)) {
            echo $array[$key];
        } else {
            foreach ($array as $id => $childarray) {
                FindAssocKey($key, $childarray);
            }
        }

    }
}

echo FindAssocKey('title', $result).'  -  это параметр title';
echo '<br><br>';
echo FindAssocKey('pageid', $result).'  -  это параметр page_id';

