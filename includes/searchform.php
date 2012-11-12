<?php
/*------------
*
* Searchform
*
--------------*/

	print "<form method='get' action=\"individualProduct.php?name=".$_POST['product_name']."\"  id='searchform'>
		<input type='search' class='search' name='name' placeholder='Search...' />
	</form>"; ?>

<?php
	
	if(isset($_POST['name']))
	{ 
		$search=$_POST['name'];

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
			} 
		
		}
		else echo "<p>Not a valid search term.</p>";
	}
?>