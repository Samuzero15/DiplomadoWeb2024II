<?php
$edades = array(2,45,12,43,44,56,76,78,23,45);
echo("El mayor es: ".numMayor($edades));

function numMayor(array $nums): int{
    $mayor = $nums[0];
    foreach($nums as $num){
        if($num > $mayor) $mayor = $num;
    }
    return $mayor;
}
?>