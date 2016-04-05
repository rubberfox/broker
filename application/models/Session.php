<?php
	class Session{
		public static function init() {
		session_start();
	}

	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}

	public static function get($key) {
		if(isset($_SESSION[$key]))
			return $_SESSION[$key];
	}

	public static function destroy($key) {
		if(self::exists($key)){
			unset($_SESSION[$key]);
			session_destroy();
		}
	}
	public static function exists($key){
		if(!isset($_SESSION[$key]))
    		return false;
		else{
			return true;
		}
	}

}


