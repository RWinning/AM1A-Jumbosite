Dit is de login in test</h3><hr>

<?php
	//include de LoginClass
	require_once ('class/LoginClass.php');

	$loginClassObj = new LoginClass();
	
	$query = "SELECT * FROM `login`";
	
	//method find_by_sql($query) static gemaakt. Dit heeft ale gevolg dat we de method kunnen aanroepen zonder eerst een object te hoeven maken van de LoginClass. we kunnen een method simpel aanroepen
	$result_array = LoginClass::find_by_sql($query);
	
	echo "<table>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			</tr>";
	foreach ( $result_array as $value )
	{
		echo "<tr>
					<td>" .$value->get_id()."</td>
		<td>" .$value->get_email()."</td>
		<td>" .$value->get_password()."</td>
		<td>" .$value->get_userrole()."</td>
		<td>" .$value->get_activated()."</td>
		<td>" .$value->get_activationdate()."</td></tr>";
	}

?>


