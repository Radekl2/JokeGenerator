<?php


require_once __DIR__.'/vendor/autoload.php';
use rsmyksy\JokesGenerator\JokeGenerator;

$http = new \GuzzleHttp\Client();
$api = new JokeGenerator($http);
$joke = $api->getJoke();

?>

<html>
	<body>
		<h1>
			<?php
				echo sprintf("Joke is %s \n", $joke);
			?>
		</h1>
	</body>
</html>
