<?php
/*------------
*
* Searchform
*
--------------*/
?>

<form method="post" action="#"  id="searchform">
      <input type="search" class="search" name="search" placeholder="Search..." />
</form>

<?php

	if(isset($_POST['search']))
	{ 
		$search=$_POST['search'];
		echo "You Searched for '$search'";

		if(preg_match("/^[A-Z0-9|a-z]+/",$search)) 
		{
			
			$query="SELECT id FROM products WHERE category <> 'featured' AND name LIKE '%" .$search. "%'";
			$result=mysql_query($query); 

			if(! $result )
	        {
	        	die('Could not get data: ' . mysql_error());
	        }

			while($row=mysql_fetch_array($result)){ 
		        $optionID=$row['id']; 
				//-display the result of the array 

				echo "<ul>"; 
				echo "<li><p>The ID of your searched item is ".$optionID."</p></li>"; 
				echo "</ul>"; 
			} 
		
		}
		else echo "<p>Not a valid search term.</p>";
	}
?>