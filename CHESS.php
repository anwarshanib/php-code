<?php

echo "<table>";
	
	$flag=-1;
	
	for($j=0;$j<8;$j++)
    
	{
		
	
		
		echo "<tr>";
	
	
	for($i=0;$i<8;$i++)
		
	   {
		
		
		
		if($flag<1)
		 {
	
	echo "<td height=40px; width=40px; style= background-color:black ></td>";	
			$flag= $flag *-1;
		 }
		else
		 {
		
		echo "<td height=40px; width=40px; style= background-color:white ></td>";	
			$flag= $flag *-1;
		 }
	   }	
		$flag= -($flag);
	}

echo "</table>";

?>
