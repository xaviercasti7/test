<!DOCTYPE html>
<html lang="en">
<head>
             <meta charset="UTF-8">
            <title>Operaciones Matematicas</title>

    </head>
    <body>
         <fieldset>
            <legend>Operaciones Matematicas</legend>
            <form action="#"method="POST">
                  <label for="N1">primer numero</label>
                  <input type="number" name="n1" requred>
                  <br><br>
                  <label for="N2">descendente</label>
                  <input type="number" name="n2" requred>
                  <br><br>
               <label for="operaciones">operaciones aritmeticas</label>
            
   
            <select name="operaciones"id="opr">
                    <option value="sumar">sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
             </select>
              <br>
<input type="submit"name="enviar"value="Calcular">
                       
             </form>
         </fieldset>
    <h1>RESULTADOS</h1>
    <?php
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $opr=$_POST['operaciones'];
    if(isset($_POST["enviar"])){
    switch($opc){

                                case'sumar':
                                    $resultado=$n1 + $n2;
                                   echo"la suma de ".$n1."+".$n2."=".$resultado;                   
                                   break;
                                case'restar':
                                    $resultado=$n1 - $n2;
                                    echo"la resta de ".$n1."+".$n2."=".$resultado;                   
                                    break;
                               case'dividir':
                                    $resultado=$n1 * $n2;
                                    echo"la multiplicacion de ".$n1."+".$n2."=".$resultado;                   
                                    break;
                                 case'multiplicarr':
                                    $resultado=$n1 / $n2;
                                    echo"la division de ".$n1."+".$n2."=".$resultado;                   
                                    break;
                     }
     }
   
   ?>

       </body> 
        </html> 