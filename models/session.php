<?php


class Session {

	private $signed_in = false;
	public $user_id;

	function __construct() {

		session_start();
		$this->check_the_login();

	}

	public function set_flash_message($key="", $value="") {
        $_SESSION[$key] = $value;
	}

    public function read_flash_message($key=""){
	    if(isset($_SESSION[$key])) {
	        $this->$key = $_SESSION[$key];
	        unset($_SESSION[$key]);
	        return $this->$key;
        } else {
	        return '';
        }
	}

	public function is_signed_in() {

		return $this->signed_in;

	}

	public function login($user){

		if($user) {

			$this->user_id = $_SESSION['user_id'] = $user->id;
			$this->signed_in = true;

		}

	}

	public function logout(){

		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->signed_in = false;

	}

	private function check_the_login() {

		if(isset($_SESSION['user_id'])) {

			$this->user_id	= $_SESSION['user_id'];
			$this->signed_in = true;

		} else {

			unset($this->user_id);
			$this->signed_in = false;

		}

	}

}

$session = new Session();

?>