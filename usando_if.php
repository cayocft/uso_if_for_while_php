<?php
$nota1 = 4;
$nota2 = 4;
$promedio = 0;
$promedio = ($nota1 + $nota2)/2;
if($promedio >= 4){
    echo "Aprobó";
}else{
    echo "Reprobó";
}
echo "<br> El promedio fue: <b>".$promedio."</b>";