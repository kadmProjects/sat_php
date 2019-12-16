<?php

class Config {
	
	public static function base_url() {
		return pathinfo($_SERVER['PHP_SELF']);
	}
}
