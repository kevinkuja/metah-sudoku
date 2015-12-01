<?php
require_once 'inicios.php';
require_once 'colonia_hormigas/sudoku.php';
require_once 'colonia_hormigas/hormiga.php';
require_once 'colonia_hormigas/feromonas.php';
$random = inicioRandom(30);

$feromonas = New Feromonas();

for($i= 1;$i<1000;$i++){
    $sudoku = new Sudoku($random);
    $hormiga = new Hormiga($sudoku,$feromonas,30);
    if($i % 10 == 0){
        $feromonas->evaporar();
    }
    if($hormiga->resolver()){
        break;
    }
   
    
}