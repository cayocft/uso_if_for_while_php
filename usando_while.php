<?php
$notas = [
    4,
    5,
    3
];
$i=0;
$notas_sumadas = 0;
$promedio = 0;
while($i < 3){
    $notas_sumadas = $notas_sumadas + $notas[$i];
    $i++;
}
echo "El valor de nuestra variable i es: ".$i;
$promedio = $notas_sumadas/$i;
echo "<br>El promedio es: ".$promedio;
