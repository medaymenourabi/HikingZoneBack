<?php
require __DIR__.'/vendor/autoload.php';
$client = new \GuzzleHttp\Client([
    'base_uri'=>'http://127.0.0.1:8000',
    'defaults'=>[
        'exceptions'=>false,
    ]


]);

$username = 'hama';
$email='hama17@gmail.com';
$password ='lkjlkpplj';
$data = array(
  'username'=>$username,
    'email'=>$email,
    'password'=>$password
);

$response =$client->request('POST','/api/add', [
    'body' => json_encode($data)

]);
echo $response->getBody();
echo "\n\n";