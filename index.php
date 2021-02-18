<?php

$api = file_get_contents("https://lotto.api.rayriffy.com/latest");
$data = json_decode($api,true);
echo "<pre>";
print_r($data['response']['prizes'] );
echo "</pre>";
$row = $data['response'];



?>