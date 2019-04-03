<?php 
      echo "<b> 1). Lista de números del 1 al 10 Sin hacer uso de ninguna estructura tipo bucle</b><br><br>";
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
	  echo "<b> 2). Escriba un Script en PHP que muestre por pantalla los números del 1 al 10</b><br><br>";
	  
  echo "</tr></table>";
echo "<table border = '1'><tr>";  
  echo"<hr>";
  
  echo "<b> 3). Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales.</b><br><br>";
   for($i = 1; $i <= 100; $i++){
      echo $i .".";
   }
    echo"<hr>";
	echo "<b> 4). Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales de 2 en 2.</b><br><br>";
$n=2;
while ($n<= 100) {
 echo $n.".";
  $n=$n+2; //$i=$i+1;
}
echo "</tr></table>";
  echo"<hr>";
	 echo "<b> 5). Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y los muestre por pantalla. Use la función rand().</b><br><br>";
	  for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(1,300);
    echo $aleatorio.".";
    }
  echo"<hr>";
  echo"<hr>";
	  echo "<b> 6). Escriba un algo Script en PHP ritmo que muestre por pantalla la suma de los primeros 100 números naturales.</b><br><br>";

	$num = 1;
$suma = 0;

 while ($num <=100) { 
      $suma = $suma + $num;
      $num = $num + 1;
      echo "$num.";
    
     
    }
     echo "La sumatoria es: $suma";
			  
  echo "</table>";
    echo "</tr></table>";	  
    echo"<hr>";
  echo "</tr></table>";
echo "<table border = '1'><tr>";  
  
    
	 echo "<b> 7). Escriba un Script en PHP que muestre por pantalla los múltiplos de 3 comprendidos en la serie del 1 al 100.</b><br><br>";
	  $num=1;
while ($num <=100) {
      if ($num%3==0){
        echo $num.".";
         }
      $num++;
      }
  echo "</tr></table>";
echo "<table border = '1'><tr>";  
  echo"<hr>";
  
	 echo "<br><br>";

   
 
	echo "<br><br>";
echo "<b> 8).Escriba un Script en PHP que genere aleatoriamente 10 números
      enteros positivos y los muestre por pantalla, y visualice además el
      siguiente reporte en una tabla HTML:
      - Total de números pares generados.
      - Total de números impares generados</b><br><br>";
	  $t= 1;
		$acumulador1=0;
		$acumulador2=0;
	 echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;";
			if($tt%2==0){
				$acumulador1++;
				
			}else {
				$acumulador2++;
				
			}
			$t++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares:</td><td>". $acumulador1 ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". $acumulador2 ."</td></tr>";
		echo "</table>";
  echo "</tr></table>";
echo "<table border = '1'><tr>";  
  
   echo"<hr>";
	  echo "<b>9).Escriba un Script en PHP que genere aleatoriamente 10 números
enteros positivos y negativos, y los muestre por pantalla, y visualice
además el siguiente reporte en una tabla HTML:
- Total de números positivos pares generados.
- Total de números positivos impares generados.
- Total de números negativos pares generados.
- Total de números negativos impares generados.</b><br><br>";
	  $n= 1;
		$acumulador3=0;
		$acumulador4=0;
		$acumulador5=0;
		$acumulador6=0;
		
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;";
			if($nn%2==0){
				if($nn>=0){
				$acumulador3++;
				}else{
					$acumulador5++;
					}				
			}else {
				if($nn>=0){
				$acumulador4++;
				}else{
					$acumulador6++;
					}	
			}
			$n++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL2</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
		echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
		echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
		echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
		echo "</table>";
	  
  echo "</tr></table>";
echo "<table border = '1'><tr>";  
  echo"<hr>";
  













    
?>