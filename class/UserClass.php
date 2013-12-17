<?php
require_once ("MySqlDatabaseClass.php");
    class UserClass
    {
    	//fields
    	private $id;
		private $firstname;
		private $infixd;
		private $surname;
		private $address;
		private $addressnumber;
		private $city;
		private $zipcode;
		private $country;
		private $telephonemunber;
		private $mobiletelephonenumber;
		
		//properties
		public function getId()                   {return $this->id;}
		public function getFirstname() 			  {return $this->firstname;}
		public function getInfix() 				  {return $this->infix;}
		public function getSurname() 			  {return $this->surname;}
		public function getAddress() 	 		  {return $this->address;}
		public function getAddressnumber() 		  {return $this->addressnumber;}
		public function getCity() 				  {return $this->city;}
		public function getZipcode() 			  {return $this->zipcode;}
		public function getCountry() 			  {return $this->country;}
		public function getTelephonenumner()      {return $this->telephonenumner;}
		public function getMobiletelphonenumber() {return $this->mobiletelphonenumber;}
		
		public function __construct()
		{
			
		}
		
		public static function find_by_sql($query)
		{
			global $database;
			
			$result = $database->fire_query($query);
			
			$object_array = array();
			
			while ($row = mysql_fetch_array($result))
			{
				$object = new UserClass();
				
				$object->id 					= $row['id']; 
				$object->firstname 				= $row['firstname'];
				$object->infix 					= $row['infix'];
				$object->surname 				= $row['surname'];
				$object->address 				= $row['address'];
				$object->addressnumber			= $row['addressnumber'];
				$object->city 					= $row['city'];
				$object->zipcode 				= $row['zipcode'];
				$object->country 				= $row['country'];
				$object->telephonenumber 		= $row['telephonenumber'];
				$object->mobiletelephonenumber  = $row['mobiletelephonenumber'];
				
				$object_array;
			}
			return $object_array;
		}
    }
?>