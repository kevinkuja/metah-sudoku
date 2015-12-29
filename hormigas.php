<?php
ini_set('max_execution_time', 900);
require_once 'inicios.php';
require_once 'colonia_hormigas/colonia.php';

$cont1= $cont2= 0;
$colonia = new Colonia_hormigas();
$funciones = ['inicio1', 'inicio2', 'inicio3', 'inicioDiagonal', 'inicioDiagonalcita', 'inicioDiagonalcita2',
				'inicioCruzado','inicio1A', 'inicio4A', 'inicioEasyA', 'inicioEasyB', 'inicioEasyC', 'inicioEasyE', 'inicioEasyE'
				];
foreach ($funciones as $fun) {
    
    for($a=0;$a<30;$a++){


        //echo '<pre>';print_r($random);echo '</pre>';exit;
        if($colonia->resolver(call_user_func($fun),$a)){

            $cont1++;
        }
        echo $fun.','.$a.','.$cont1.'<br>';
        $cont1=0;
    }
    
}

echo 'Resueltos '.$cont1;