<?php
$url = 'http://localhost/API/stdapi.php';
$json = file_get_contents($url);
$datas = json_decode($json, true);

foreach ($datas as $key => $value) {
    echo $key, " : ", $value, "<br>";
}