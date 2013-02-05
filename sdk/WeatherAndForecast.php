<?php
require_once("mashape/MashapeClient.php");


class WeatherAndForecast {
	const PUBLIC_DNS = "metwit-weather.p.mashape.com";
	private $authHandlers;

	function __construct($publicKey, $privateKey) {
		$this->authHandlers = array();
		$this->authHandlers[] = new MashapeAuthentication($publicKey, $privateKey);
		
	}
	public function getWeather($locationlat, $locationlng) {
		$parameters = array(
			 
			
				"location_lat" => $locationlat,
				"location_lng" => $locationlng );

		$response = HttpClient::doRequest(
				HttpMethod::GET,
				"https://" . self::PUBLIC_DNS . "/weather/",
				$parameters,
				$this->authHandlers,
				ContentType::FORM,
				true);
		return $response;
	}
	

	
}
?>