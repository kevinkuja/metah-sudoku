<?php
require_once 'sudoku.php';
require_once 'hormiga.php';
require_once 'feromonas.php';
Class Colonia_hormigas{
    
    public function resolver($inicio){
        $feromonas = New Feromonas();
        for($i= 1;$i<400;$i++){
            $sudoku = new Sudoku($inicio);
            $hormiga = new Hormiga($sudoku,$feromonas,30);
            if($i % 6 == 0){
                $feromonas->evaporar();
            }
            if($hormiga->resolver_por_posibles()){
                echo 'Hormiga: '.$i.'<br>';
                return true;
    //            echo '<br>Inicial:';
    //            $sudoku = new Sudoku($random);
    //            $sudoku->imprimir();
    //            echo 'Hormiga: '.$i;                
                break;
            }
        }
    }
}
