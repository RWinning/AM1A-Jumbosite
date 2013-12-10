<?php
    class SessionClass 
    {
    	//fields
    	private $id;
		private $email;
		private $userrole;
		private $logged_in;
		
		public function __construct()
		{
			
		}
		
		
		
		public function login($LoginClassObject)
		{
			$this->id = $_SESSION['id']		   = $LoginClassObject->get_id();
			$this->id = $_SESSION['email']     = $LoginClassObject->get_email();
			$this->id = $_SESSION['userrole']  = $LoginClassObject->get_userrole();
			$this->logged_in = true;
		}
		
		public function logout()
		{
			session_destroy();
			unset($this->id);
		}
    }
	
	
	$session = new SessionClass();
?>