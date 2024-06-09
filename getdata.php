<?php
$url = 'https://fedskillstest.coalitiontechnologies.workers.dev';
$username='coalition';
$password='skills-test';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response);   
//echo '<pre>';
//print_r($data);
//echo '</pre>';

return $data;

?>