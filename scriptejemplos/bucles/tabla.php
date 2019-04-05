<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Series de Numeros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
    <body bgcolor="#cfcfcf">
        <form action="tabla.php" method="POST">
            <center>
                    <table aling="center" border="4" height="300" width='20' align="center" background="/text/images/mario.jpeg" no repeat>
                        <tr>
                            <td colspan="4"  >
                                <CEnter><B><H1>Series de Numeros</H1><br> </B></CEnter>
                            </td>
                        </tr>
                        <tr>
                                <td bgcolor= "#FFFFFF"><b>Genere numero :</b><font color="RED"> </font></td>
                                <td bgcolor= #000000b><input type="number" placeholder="0" name="n1" minlength="5" maxlength="30" pattern="[0,9]{4-16}"  required></b></td>
                        </tr>            
                        <tr>
                                <td bgcolor= "#FFFFFF"><b>Operacion :</b><font color="RED"> </font></td>
                                <td bgcolor= "#000000">
                                    <select name="Tipo_op" >
                                            <option value="1"></option>
                                            <option value="2">Acendente</option>                                
                                            <option value="3">Decendente</option>
                                    </select></td>
                        </tr>
                        <td colspan="2" ><br >
                            <center><input type="submit" value="PROCESAR"></center><br>
                                        
                        </td>

                    </table>
                </center>
        </form>
    </body>
</html>
<center>
<?php

$num = $_POST['n1'];
$tipo = $_POST['Tipo_op'];
 
      echo "<br><br>";
        echo "<table border = '2' >";
        
        if($tipo==2){ 
        echo "<H2>"."Vector Generado";
        echo "<H3>"."<Hr>";
            for($i=1;$i<=$num;$i++)
                {

                    if($i%2==0)
                    {
                            
                        echo "<td bgcolor= 'RED'>";
                             echo "<H2>"." ". $i ;
                        echo "</td>";
                    }       
                    else
                    { 
                            
                        echo "<td bgcolor= 'GRAY'>";
                                    echo "<H2>"." ". $i ;
                         echo "</td>";
                            
                    }
            }
              
        }else if($tipo==3){
        echo "<table border = '2'>";
            $Numeros = range($num,1);
            echo "<H2>"."Vector Generado";
            echo "<H3>"."<Hr>";
            while (list($i,$Valor)=each($Numeros))
                    {
                        if($i%2==0)
                        {
                            
                            echo "<td bgcolor= 'yellow'>";
                                echo "<H2>".$Valor . "  ";
                            echo "</td>";
                        
                        }
                        else
                        {
                        
                            echo "<td bgcolor= 'green'>";
                                echo "<H2>".$Valor . "  ";
                            echo "</td>";
                        
                        } 
                           
                    }
        }
          echo "</table>";
        echo "<hr>";
      echo "<br><br>";




?>
</center>