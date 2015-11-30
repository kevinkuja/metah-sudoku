<?php
require_once 'inicios.php';

Class Celda{
	public  $valor;
	public  $posibles;
	public  $tipo;
	function __construct($valor, $tipo){
		$this->valor = $valor;
		$this->tipo = $tipo;
		if(!$tipo)
			$this->posibles = array(1,2,3,4,5,6,7,8,9);
		else
			$this->posibles = array();
	}
}

class Sudoku{
    
    protected $_tablero;
    
    public function __construct($inicio) {
        $this->_tablero = array();
        // Cargar celdas iniciales
        for ($i = 0; $i < 9; $i++)
            for ($j = 0; $j < 9; $j++)
                $this->_tablero[$i][$j] = new Celda(null, false);
        foreach ($inicio as $ini) {
            $this->_tablero[$ini->fila][$ini->columna] = new Celda($ini->valor, 1);
            $this->actualizar_posibles($ini);
        }
        return $this->_tablero;
    }

    protected function actualizar_posibles($ini) {        
        $this->actualizar_posibles_columnas($ini);
        $this->actualizar_posibles_filas($ini);
        $this->actualizar_posibles_cuadrante($ini);        
    }
    
    protected function actualizar_posibles_columnas($ini){
        for ($f = 0; $f < 9; $f++) {
            if ($f != $ini->fila && !$this->_tablero[$f][$ini->columna]->tipo) {
                $this->borrarElemento($this->_tablero[$f][$ini->columna]->posibles, $this->_tablero[$ini->fila][$ini->columna]->valor);
            }
        }
    }
    
    protected function actualizar_posibles_filas($ini){
        for ($c = 0; $c < 9; $c++) {
            if ($c != $ini->columna && !$this->_tablero[$ini->fila][$c]->tipo) {
                
                $this->borrarElemento($this->_tablero[$ini->fila][$c]->posibles, $this->_tablero[$ini->fila][$ini->columna]->valor);
            }
        }
    }
    protected function actualizar_posibles_cuadrante($ini){
        for ($i = $ini->fila - ($ini->fila % 3); $i < $ini->fila - ($ini->fila % 3) + 3; $i++) {
            for ($j = $ini->columna - ($ini->columna % 3); $j < $ini->columna - ($ini->columna % 3) + 3; $j++) {
                if ($i != $ini->fila &&
                        $j != $ini->columna &&
                        !$this->_tablero[$i][$j]->tipo) {
                    $this->borrarElemento($this->_tablero[$i][$j]->posibles, $this->_tablero[$ini->fila][$ini->columna]->valor);
                }
            }
        }
    }

    protected function  borrarElemento(&$array, $elem){
        
	foreach (array_keys($array, $elem, true) as $key) {                
		unset($array[$key]);
	}
    }
    
    public function sePuede($fila,$columna,$valor){
        return $this->_tablero[$fila][$columna]->valor == null && in_array($valor,$this->_tablero[$fila][$columna]->posibles);
    }
    
    public function insertar_valor($fila,$columna,$valor){
        $this->_tablero[$fila][$columna]->valor = $valor;
        $ini = construirInicio($valor,$fila,$columna);        
        $this->actualizar_posibles($ini);
    }
    
    public function resolver_random(){
        for ($fila = 0; $fila < 9; $fila++){
            for ($columna = 0; $columna < 9; $columna++){
               for($valor = 0; $valor < 9; $valor++){
                   if($this->sePuede($fila,$columna,$valor)){
                       
                       $this->insertar_valor($fila,$columna,$valor);

                       break;
                   }
               } 
            }
        }
        $this->imprimir();
    }
    
    public function imprimir(){
	echo "<table border=1>";
	for($i = 0; $i <9; $i++){
		echo "<tr>";
		for($j = 0; $j <9; $j++){
			echo "<td width='20px' height='20px' style='text-align:center;".($j % 3 == 0 ? "border-left: 3px solid #000;" : "").($i % 3 == 0 ? "border-top: 3px solid #000;" : "")."'>";

			
			echo $this->_tablero[$i][$j]->valor;

			echo "</td>";		}
		echo "</tr>";
	}
	echo "</table>";   
    }
    
}

$sudoku = new Sudoku(inicioRandom(30));
$sudoku->resolver_random();