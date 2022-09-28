<?php
include('../lab81/lab81_metodos.php');
$num = $_POST['num'];
$Cal = new Calcular_procentaje($num);
$resul = $Cal->factorial_num();

echo   "<h1>El resultado del factorial es: $resul</h1>";