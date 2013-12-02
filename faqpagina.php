<?php 
if (!isset($_GET['language']))
	{
		$_GET['language'] = 'dutch';
	}
	$userrole = array('customer');
	include ("security.php"); 
	include ("connect_db.php");
	$query = "SELECT * FROM `faq`";
	$result = mysql_query($query, $db);
?>


<table class='simple'>
	<caption>
	<a  href='index.php?content=faqpagina&language=dutch'><img src='./images/vlag_NL.png' width='75' height='75' /></a>
		FAQ Page
	<a  href='index.php?content=faqpagina&language=english'><img src='./images/vlag_EN.png' width='70' height='70' /></a>
	</caption>
	<tr>
		<th>
			id
		</th>
		<th>
			vraag
		</th>
		<th>
			antwoord
		</th>
	</tr>
<?php
	while ($record = mysql_fetch_array($result))
	{
		echo "<tr>
				<td>
					".$record['id']."
				</td>
				<td>
					";
					if($_GET['language'] == 'english')
					{
						echo $record ['question_english'];
					}
					else
					{
						echo $record ['question_dutch'];
					}
					echo "			
				</td>
				<td>
					";
					if($_GET['language'] == 'english')
					{
						echo $record ['answer_english'];
					}
					else
					{
						echo $record ['answer_dutch'];
					}
					echo "
				</td>
		</tr>";
	}
?>

</table>