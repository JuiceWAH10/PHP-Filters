<?php

	if(isset($_POST['validateInt'])){
		ValidateInt();
	}
	if(isset($_POST['validateIP'])){
		ValidateIPv6();
	}
	if(isset($_POST['validateURL'])){
		ValidateURL();
	}
	if(isset($_POST['validateASCII'])){
		ValidateASCII();
	}
	
	function ValidateInt(){
		$int = $_POST["int"];
		$min = $_POST["min"];
		$max = $_POST["max"];
		
		if (empty($int) || empty($int) || empty($int)){
			MsgBox("Blank input is prohibited.");
		}
		else{
			if(filter_var($min, FILTER_VALIDATE_INT) === 0 || filter_var($min, FILTER_VALIDATE_INT) && filter_var($max, FILTER_VALIDATE_INT)){
				if(filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)){
					if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
					MsgBox("Integer is not within the indicated range.");
					}
					else {
						MsgBox("Integer is within the indicated range.");
					}
				}
				else{
					MsgBox("Input is not an integer! Input only whole numbers.");
				}
			}
			else{
				MsgBox("Min/Max must be an integer!");
			}	
		}
	}
		
	function ValidateIPv6(){
		$ip = $_POST["ip"];
		if (empty($ip)){
			MsgBox("Blank input is prohibited.");
		}
		else{
			if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
				MsgBox("$ip is a valid IPv6 address");
			} else {
				MsgBox("$ip is not a valid IPv6 address");
			}
		}
	}
	
	function ValidateURL(){
		$url = $_POST["url"];
		if (empty($url)){
			MsgBox("Blank input is prohibited.");
		}
		else{
			if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
				MsgBox("$url contains QueryString");
			} else {
				MsgBox("$url has no QueryString");
			}
		}
	}
	
	function ValidateASCII(){
		$str = $_POST["ascii"];
		if (empty($str)){
			MsgBox("Blank input is prohibited.");
		}
		else{
			$str = filter_var($str, FILTER_DEFAULT, FILTER_FLAG_STRIP_HIGH);
			MsgBox("$str after removing characters with ASCII value < 127");
		}
	}
	
	function MsgBox($message){
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
?>