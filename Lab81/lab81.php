<?php
include('lab81_metodos.php');
$porc = $_POST['porcentaje'];
$Cal = new Calcular_procentaje($porc);
$img = $Cal->porc();

echo "<img src='$img' alt=''>";