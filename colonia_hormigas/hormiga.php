<?php

class Hormiga{
    protected $_sudoku;
    protected $_feromonas;
    protected $_proba;
    
    public function __construct($sudoku,&$feromonas, $proba){
        $this->_sudoku = clone $sudoku;
        $this->_feromonas = &$feromonas;
        $this->_proba = $proba;
    }
    
    public function resolver() {
        for ($fila = 0; $fila < 9; $fila++) {
            for ($columna = 0; $columna < 9; $columna++) {
                if(!$this->_sudoku->hayValor($fila, $columna)){
                    $seMovio = $this->seguir_feromona($fila, $columna);
                    

                    if (!$seMovio) {
                        $seMovio = $this->estrategia($fila, $columna);                        
                    }
                    if (!$seMovio) {  
//                         $this->_sudoku->imprimir();
//                         echo'<br>';
                        return false;
                    }
                }
            }
        }

        $this->_sudoku->imprimir();
        return true;
    }
    
    public function seguir_feromona($fila, $columna){
        $valoresConFeromonas = $this->_feromonas->obtener_feromonas($fila, $columna);
        //print_r($valoresConFeromonas);

        foreach ($valoresConFeromonas as $valor => $feromona) {
            $probaDeMoverse = rand (0, $this->_proba);

            if ($this->_sudoku->sePuede($fila, $columna, $valor) && (($probaDeMoverse) * $feromona) >= 100) {

                $this->moverse($fila, $columna, $valor);
                return true;                
            }
        }
        return false;
    }
            
    
    public function estrategia($fila, $columna){
        $trials = $this->_sudoku->posibles_valores($fila, $columna);
        shuffle($trials);                        
        foreach ($trials as $valor) {
            if ($this->_sudoku->sePuede($fila, $columna, $valor)) {
                //echo 'entro';
                $this->moverse($fila, $columna, $valor);
                return true;                
            }
        }
        return false;
    }
            

    protected function moverse($fila,$columna,$valor){
       $this->_feromonas->depositar_feromona($fila,$columna,$valor);
       $this->_sudoku->insertar_valor($fila,$columna,$valor);
    }
    
    protected function uniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
}