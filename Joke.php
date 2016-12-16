<?php

require_once __DIR__.'/vendor/autoload.php';
use rsmyksy\JokesGenerator\JokeGenerator;

$http = new \GuzzleHttp\Client();
$api = new JokeGenerator($http);
$joke = $api->getJoke();
echo sprintf(
 "Joke is %s \n",
 $joke
);
