<?php
$access_token = 'guSq53LOI97v5Nn6Vmt4V7KxkVYzgtXieCP3XzzFXVRRF1tdS5uoG49v2mIYbUZsyQ3U8i89dX7y9u2lE6Or+ys011zLxGYSyb4jzkMiXHSIse09xKoP1qz4cuODy9bJvm8JOi9GryuQM6VEX55x4AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
