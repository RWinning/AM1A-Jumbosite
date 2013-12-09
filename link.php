<uL>
	<li>
		<a href="index.php?content=homepage">Home</a>
	</li>
	<li>
		<a href="index.php?content=class/logintest">login test</a>
	</li>
	<?php if (isset($_SESSION['userrole']))
	{
		echo "<li>
			  <a href='index.php?content=logout'>uitloggen</a>
			  </li>";
		switch ($_SESSION['userrole'])
		{
			case 'customer';
				echo "<li>
						<a href='index.php?content=downloadpage'>downloads</a>
					  </li>";
					  
					  echo "<li>
					  <a href='index.php?content=customer_homepage'>customer home</a>
					</li>";
					
					echo "<li>
					  <a href='index.php?content=faqpagina'>FAQ</a>
					</li>";
		
			break;
			case 'admin';
				echo "<li>
						<a href='index.php?content=downloadpage'>downloads</a>
					  </li>";
					  
					  echo "<li>
					  <a href='index.php?content=admin_homepage'>admin home</a>
					</li>";
					
					echo "<li>
					  <a href='index.php?content=faqpagina'>FAQ</a>
					</li>";
				
			break;
			case 'root';
				echo "<li>
						<a href='index.php?content=downloadpage'>downloads</a>
					  </li>";
					  
					  echo "<li>
					  <a href='index.php?content=root_homepage'>root home</a>
					</li>";
					
					echo "<li>
					  <a href='index.php?content=faqpagina'>FAQ</a>
					</li>";
			break;
			}			
		}
		else
		{
		echo "<li>
			  <a href='index.php?content=login_form'>inloggen</a>
			  </li>
			  <li>
			  <a href='index.php?content=register_form'>registratie</a>
			  </li>";
		}	
	?>
</uL>