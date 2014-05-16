<?php 

class FacebookAPIExchange {
	private $URL = 'https://graph.facebook.com/'; // Constant
		
	private $app_id;
	private $app_secret;
	private $get_field;
	private $access_token;

	
	// PHP legacy compatibility.
	public function FacebookAPIExchange(array $settings) {
		__construct($settings);
	}
	
	public function __construct(array $settings) {
		if(!isset($settings['app_id']) || !isset($settings['app_secret'])) {
			throw new Exception('Make sure you are passing in the correct parameters');
		}
		
		$this->app_id = $settings['app_id'];
		$this->app_secret = $settings['app_secret'];
		$this->buildAccessToken();
		
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
	
	public function buildAccessToken(){
		if(!isset($this->app_id) || !isset($this->app_secret)) {
			throw new Exception('You did not create an object with App ID and App Secret');
		}
		
		$this->access_token = $this->app_id . '|' . $this->app_secret;
		
		return $this;
	}
	
	public function buildRequest() {
		if(!isset($this->app_id) || !isset($this->app_secret)) {
			throw new Exception('You are not authorized to build request');
		}
		if(!isset($this->get_field)) {
			throw new Exception('The GET field is not set.');
		}
		
		$request = $this->URL . $this->get_field . '?' . 'access_token=' . $this->access_token;
		
		return $request;
	}
	
	public function performRequest() {
		$response = file_get_contents($this->buildRequest(), true);
		$response = json_decode($response, true);
		
		return $response;
	}
}
?>