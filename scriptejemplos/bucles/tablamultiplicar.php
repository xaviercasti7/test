<html>
<body>
<script>
var cont=0;
var tabla=""; //alamcena el numero de tabla

var respuesta=prompt("Introduzca nùmero de tabla");
tabla=respuesta;
while (cont<10){

document.write(tabla);
cont=cont+1;
document.write("x"); 
document.write(cont);
document.write("=");
document.write(cont*tabla);
document.write("<br/>");	
}
</script>
</html>
</body> 