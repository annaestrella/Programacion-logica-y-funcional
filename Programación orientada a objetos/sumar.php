<?php

include("clase.php");

$n1=15;
$n2=5;
echo "La suma es: ".matematica::sumar($n1,$n2);
echo "<br>";
echo "La resta es: ".matematica::restar($n1,$n2);
echo "<br>";
echo "La multiplicacion es: ".matematica::multiplicar($n1,$n2);
echo "<br>";
echo "La suma es: ".matematica::dividir($n1,$n2);

?>