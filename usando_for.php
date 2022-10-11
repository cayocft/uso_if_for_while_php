<?php

$notas = [
    4,
    5,
    3
];
$notas_sumadas = 0;
$promedio = 0;
$i = 0;
for($i=0; $i<3; $i++){
    $notas_sumadas = $notas_sumadas + $notas[$i];
}
echo "La suma de notas es: ".$notas_sumadas;
$promedio = $notas_sumadas/$i;
echo "<br>El promedio es: ".$promedio;