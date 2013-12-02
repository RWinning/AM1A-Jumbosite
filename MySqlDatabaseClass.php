<?php
	require_once 'config.php';
	
	class MySqlDatabaseClass
	{
			//fields
			private $db_connection;
		
			public function __construct()
			{
			//velden
				
			$this->db_connection = mysql_connect(SERVERNAME,
											 	 USERNAME,
											 	 PASSWORD);
											 
			mysql_select_db(DATABASE, $this->db_connection) or die ('MySqlDatabasClass, database niet geselcteerd');
			}
		

	
		public function fire_query($query)
		{
			$result = mysql_query($query) or die ('MySqlDatabase: '.mysql_error());
			return $result;
		}
	
	}
	
	$database = new MySqlDatabaseClass();
	
