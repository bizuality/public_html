<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); 

require_once($root .  '/public_html/resources/load.php');

/*****************************************************************************************
 * Author: Trevor Hutto
 * Company: bizuality
 * Version 1.0
 *
 * Creates a readable statistics report using the StatCounter API.
***/

/*****************************************************************************************
 * Constants
 *
 * Calculate date constants for use in the query strings.
***/
$isDone=false;
$baseURL = "http://api.statcounter.com/stats/";
$version = "3";
$format = "";
date_default_timezone_set('America/New_York');
$currentHour = date('H');
$previousHour = date('H', strtotime('-1 hour'));
$currentDay = date('d');
$previousDay = date('d', strtotime('-1 day'));
$currentWeek = date('W');
$previousWeek = date('W', strtotime('-1 week'));
$currentMonth = date('n');
$previousMonth = date('n', strtotime('-1 month'));
$currentYear = date('Y');
$previousYear = date('Y', strtotime('-1 year'));
$dailyStats = ""; // Array of todays statistics.
$weeklyStats = ""; // Array of this weeks statistics.
$monthlyStats = ""; // Array of this years statistics.
$yearlyStats = ""; // Array of this years statistics.
$recentVisitors = ""; // Array of recent visitor data.

/*****************************************************************************************
 * Class StatCounter
 *
 * This class takes the project id ($pid), username ($username), password ($password), and
 * stat type ($stat_type) in order to later build a query to the StatCounter database.
***/
class StatCounter {
	
	var $pid;
	var $username;
	var $password;
	
	function StatCounter($username, $password){
		$this->username = $username;
		$this->password = $password;
	}
	
	function get_pid() {
		return $this->pid;
	}
	function set_pid($pid){
		$this->pid = $pid;
	}
	function get_username() {
		return $this->username;
	}
	function set_username($username){
		$this->username = $username;
	}
	function get_password() {
		return $this->password;
	}
	function set_password($password){
		$this->password = $password;
	}
	
	function getDailyStats(){
		global $baseURL;
		global $version;
		global $currentDay;
		global $currentMonth;
		global $currentYear;
		global $dailyStats;
				
		$query = "?vn=" . $version . "&s=summary" . "&g=daily" . "&sd=" . $currentDay . "&sm=" . $currentMonth . "&sy=" . $currentYear . "&ed=" . $currentDay . "&em=" . $currentMonth . "&ey=" . $currentYear . "&pi=" . $this->pid . "&t=" . time() . "&u=" . $this->username;
		$query = $baseURL . $query . "&sha1=" . sha1($query . $this->password);
		$response = file_get_contents($query, true);
		$response = json_decode($response, true);
		$dailyStats = $response['sc_data'][0]; // 0 to get the one and only result. Todays.
		
		return true;
	}
	
	function getWeeklyStats(){
		global $baseURL;
		global $version;
		global $currentWeek;
		global $currentYear;
		global $weeklyStats;
		
		$query = "?vn=" . $version . "&s=summary" . "&g=weekly" . "&sy=" . $currentYear . "&sw=" . $currentWeek . "&ey=" . $currentYear . "&ew=" . $currentWeek . "&pi=" . $this->pid . "&t=" . time() . "&u=" . $this->username;
		$query = $baseURL . $query . "&sha1=" . sha1($query . $this->password);
		$response = file_get_contents($query, true);
		$response = json_decode($response, true);
		$weeklyStats = $response['sc_data'][0]; // 0 to get the one and only result. This week's.
		
		return true;
	}
	
	function getMonthlyStats(){
		global $baseURL;
		global $version;
		global $currentMonth;
		global $currentYear;
		global $monthlyStats;
		
		$query = "?vn=" . $version . "&s=summary" . "&g=weekly" . "&sy=" . $currentYear . "&sm=" . $currentMonth . "&ey=" . $currentYear . "&em=" . $currentMonth . "&pi=" . $this->pid . "&t=" . time() . "&u=" . $this->username;		$query = $baseURL . $query . "&sha1=" . sha1($query . $this->password);
		$response = file_get_contents($query, true);
		$response = json_decode($response, true);
		$monthlyStats = $response['sc_data'][0]; // 0 to get the one and only result. This month's.
		
		return true;
	}
	
	function getYearlyStats(){
		global $baseURL;
		global $version;
		global $currentYear;
		global $yearlyStats;
		
		$query = "?vn=" . $version . "&s=summary" . "&g=yearly" . "&sy=" . $currentYear . "&ey=" . $currentYear . "&pi=" . $this->pid . "&t=" . time() . "&u=" . $this->username;
		$query = $baseURL . $query . "&sha1=" . sha1($query . $this->password);
		$response = file_get_contents($query, true);
		$response = json_decode($response, true);
		$yearlyStats = $response['sc_data'][0]; // 0 to get the one and only result. This year's.
		
		return true;
	}
	
	function getRecentVisitors($numberOfResults){
		global $baseURL;
		global $version;
		global $recentVisitors;
		
		$query = "?vn=" . $version . "&s=visitor" . "&pi=" . $this->pid ."&n=" . $numberOfResults . "&t=" . time() . "&u=" . $this->username;
		$query = $baseURL . $query . "&sha1=" . sha1($query . $this->password);
		$response = file_get_contents($query, true);
		$response = json_decode($response, true);
		$recentVisitors = $response['sc_data']; // 0 to get the one and only result. This year's.
	}
}
// Instantiate our new Statcounter.
$sc = new StatCounter(SC_USER, SC_PASS);
?>
