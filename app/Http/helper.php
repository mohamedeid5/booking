<?php
	
	if (!function_exists('ip')) {
		// this function to get user ip information
		function ip() {
			 // get user id 
	       	 $ip =  GeoIP::getClientIP();
	       	 // pass the ip
	         $data = GeoIP::getLocation('156.201.108.26');
	         //return user ip data
	         return $data;
		}
	}