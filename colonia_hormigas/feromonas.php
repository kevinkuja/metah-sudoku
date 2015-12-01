<?php

class Feromonas{
    
    protected $_tablero;
    
    public function __construct() {
        $this->_tablero = array();
        $feromona = array_fill(1, 9, 0);
       
        // Cargar feromonas iniciales
        for ($i = 0; $i < 9; $i++)
            for ($j = 0; $j < 9; $j++)
                $this->_tablero[$i][$j] = $feromona;
        
    }
    
    public function depositar_feromona($fila,$columna,$valor){
        $this->_tablero[$fila][$columna][$valor]++;
//        echo'<pre>'.$fila.' - '.$columna;
//        
//        print_r($this->_tablero[$fila][$columna]);echo'</pre>';
    }
    
    public function obtener_feromonas($fila,$columna){
        $resultado = $this->_tablero[$fila][$columna];
       
        arsort($resultado);
        
        return $resultado;
        
    }
    
    public function evaporar(){
        for ($fila = 0; $fila < 9; $fila++){
            for ($columna = 0; $columna < 9; $columna++){
                $nuevasFeromonas = array();
                
                foreach($this->_tablero[$fila][$columna] as $valor=>$feromona){

                        if($feromona > 0){
                            $feromona--;
                        }
                        $nuevasFeromonas[$valor] = $feromona;

                }
                $this->_tablero[$fila][$columna] = $nuevasFeromonas;
            }
        }
    }
}