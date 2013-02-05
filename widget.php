<?php
// To use the Weather and Forecast API in your code, just import the generated code
// add your developer key (you can find it in your dashboard: http://www.mashape.com/account/index )
// and relax!
// This is a sample of the initialization of the client.. then call its methods!


require_once("./sdk/WeatherAndForecast.php");


// basic instantiation. TODO Put your authentication keys here.
$client = new WeatherAndForecast("pa37osouy0k3z3bgatnqwk9lchijgh", "ofglgyf2ubjx8o7kyutbap5nmccfkp");


// A sample function call. These parameters are not properly filled in.
// See WeatherAndForecast.php to find all function names and parameters.
$response = $client->getWeather("33.749","-84.38798");

// now you can do something with the response.

$realtime_weather_object = $response->body->objects[0];
$locality = $realtime_weather_object->location->locality;
$icon = $realtime_weather_object->icon;
$now = date("G:i");

?>

<p><?php echo $now ?></p>
<img src="<?php echo $icon ?>">
<p><?php echo $locality ?></p>
	