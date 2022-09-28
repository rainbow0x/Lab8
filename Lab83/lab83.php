<?php
include('../lab81/lab81_metodos.php');
$num = $_POST['num'];
$Cal = new Calcular_procentaje($num);
$Cal->matrix();
?>