<?php

namespace rsmyksy\JokesGenerator;

class JokeGenerator
{
 private $http;

 const ENDPOINT = 'http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list';
 public function __construct($http){
 $this->http = $http;
}

 public function getJoke()
{
 $jokeUrl = sprintf(
 '%s',
 self::ENDPOINT
 );
 $joke = json_decode(
  $this->http->request('GET', $jokeUrl)->getBody(),
  true
 );
 $random = rand(0,10);
 return $joke[$random]['content'];
}
}
 


