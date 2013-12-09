<?php
	require_once ("MySqlDatabaseClass.php");
	
	
	class LoginClass
	{
		//fields
		private $id;
		private $email;
		private $password;
		private $userrole;
		private $activated;
		private $activationdate;
		
		
		public function get_id()
		{
			return $this->id;
		}
		public function get_email()
		{
			return $this->email;
		}
		public function get_password()
		{
			return $this->password;
		}
		public function get_userrole()
		{
			return $this->userrole;
		}
		public function get_activated()
		{
			return $this->activated;
		}
		public function get_activationdate()
		{
			return $this->activationdate;
		}
		
		
		
		public function __construct()
		{
			
			
		}
		
		public static function find_by_sql($query)
		{
			//met global maak je het database-object uit MySqlClass beschikbaar binnen de find method
			global $database;
			
			//vuurt de query af op database
			$result = $database->fire_query($query); 
			
			//dit is de array waar alle LoginClassObjecten in worden gestopt. Elk LoginClassObject bevat een gevonden record uit de database. 
			$obect_array = array();
			
			while ( $row = mysql_fetch_array($result))
			{
				//maak iedere while ronde een nieuwe LoginClassObject aan.
				$object = new LoginClass();
				//stop per record iedere 
				$object->id				=$row['id'];
				$object->email			=$row['email'];
				$object->password		=$row['password'];
				$object->userrole		=$row['userrole'];
				$object->activated		=$row['activated'];
				$object->activationdate =$row['activationdate'];
				//stop het net gemaakte loginobject in het $object_array
				$object_array[] = $object;
			}
			return $object_array;
		}
		//Deze  methode selecteert alle methodes uit de login table we maken gebruik van de find_by_sql methode
  public static function select_all_from_login()
  {
   $query = "SELECT * FROM `login`";
   $result = self::find_by_sql($query);
   return $result;
  }
  
  public static function email_exists($emailadress)
  {
   global $database;
   $query = "SELECT * FROM `login` WHERE `email` = '".$emailadress."'";
   $result = $database->fire_query($query);
   if (mysql_num_rows($result) > 0)
   {
    return "Het e-mailadress bestaat al in de database";
   }
   else
   {
    return "Het e-mailadress bestaat niet in de database";
   }
  }
  
  public static function check_if_email_password_exist($email, $password)
  {
	global $database;
	$query = "SELECT * FROM login' WHERE 'email' = '' AND 'password' = ''";
	$query; exit();
	$result = $database->fire_query($query);
	if(mysql_num_rows($result) > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
  }
  
  public static function find_user_by_email_password($email, $password)
  {
  	$query = "SELECT * FROM login' WHERE 'email' = '' AND 'password' = ''";
	$LoginClassObjectArray = self::find_by_sql($query);
	$LoginClassObject - array_shift($LoginClassObjectArray);
	return $LoginClassObject();
  }
 }
?>
Bestaat het a-mailadress root@root.nl? <br>
<?php echo LoginClass::email_exists("root@root.nl"); ?>