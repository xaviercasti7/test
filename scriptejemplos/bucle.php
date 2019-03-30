<?php 
      echo "<table border = '1'>";
	  for($i=1;$i<=10;$i++)
	  {
		  if($i%2==0){
			  echo "<tr><td bgcolor='RED'>".$i."</td></tr>";
		  }else{
			  echo "<tr><td bgcolor='GREEN'>".$i."</td></tr>";
			  
		  }
	  }
  echo "</table>";	 

     echo "<table border = '1'><tr>";
	  for($i=1;$i<=10;$i++)
	  {
		  if($i%2==0){
			  echo "<td bgcolor='RED'>".$i."</td>";
		  }else{
			  echo "<td bgcolor='GREEN'>".$i."</td>";
			  
		  }
	  }
	  echo"<hr>";
	  
  echo "</tr></table>";	
  echo"<hr>";
    echo "<table border = '1'><tr>";
   for($i = 0; $i < 100; $i+=3){
	    
      echo $i . '<br />';
   }
    echo"<hr>";
	$num = 1;
$suma = 0;

 while ($num <=100) { 
      $suma = $suma + $num;
      $num = $num + 1;
      echo "$num.<br>";
    
     
    }
     echo "La sumatoria es: $suma";
			  
  echo "</table>";
   echo"<hr>";
    echo "</tr></table>";	
  echo"<hr>";
    echo "<table border = '1'><tr>";
   for($i = 0; $i < 100; $i+=2){
	   
      echo $i . '<br />';
   }
    echo"<hr>";
    
?>