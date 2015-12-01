<?php
ini_set('max_execution_time', 300);
require_once 'inicios.php';
require_once 'colonia_hormigas/colonia.php';

$cont1= $cont2= 0;
$colonia = new Colonia_hormigas();
for($a=0;$a<30;$a++){
    
    $random = inicioCruzado();
    if($colonia->resolver($random)){
        $cont1++;
    }
}

echo 'Sin recalcular: '.$cont1;