<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]); 

require_once($root .  '/resources/load.php');

class InstagramAPIExchange {
	private $URL = 'https://api.instagram.com/v1/'; // CONSTANT
	 
	private $client_id;
	private $get_field;
	
	// PHP legacy compatibility.
	public function InstagramAPIExchange($client_id) {
		__construct($client_id);
	}
	
	public function __construct($client_id) {
		$this->client_id = $client_id;
	}
	
	public function setGetField($string) {
		$search = array('#', ',', '+', ':');
        $replace = array('%23', '%2C', '%2B', '%3A');
        $string = str_replace($search, $replace, $string);
        
        $this->get_field = $string;
        
        return $this;
	}
	
	public function getGetField() {
		return $this->get_field;
	}
	
	public function buildRequest() {
		if(!isset($this->client_id)) {
			throw new Exception('You are not authorized to build request.');
		}
		if(!isset($this->get_field)) {
			throw new Exception('The GET field is not set.');
		}
		
		$request = $this->URL . $this->get_field . '&client_id=' . $this->client_id;
		
		return $request;
	}
	
		public function performRequest() {
		$response = file_get_contents($this->buildRequest(), true);
		$response = json_decode($response, true);
		
		return $response;
	}
}

?>