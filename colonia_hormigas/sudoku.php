<?php

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
    
    public function hayValor($fila,$columna){
        return !($this->_tablero[$fila][$columna]->valor == null);
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
    
    public function posibles_valores($fila,$columna){
        if($this->_tablero[$fila][$columna]->valor == null){
            return $this->_tablero[$fila][$columna]->posibles;
        }else{
            return array();
        }
    }
    
    public function todos_los_posibles_valores($ordenados=true){
        
        $todosLosPosibles = new arreglo_posibles_valores();
        for ($fila = 0; $fila < 9; $fila++){
            for ($columna = 0; $columna < 9; $columna++){
                $posibles = $this->posibles_valores($fila,$columna);
                if(count($posibles) > 0){
                    
                    $todosLosPosibles->agregar($fila,$columna,$posibles);
                }
            }
        }
        if($ordenados){
            return $todosLosPosibles->obtener_ordenados();
        }else{
            return $todosLosPosibles->obtener();
        }
    }
    
    public function insertar_valor($fila,$columna,$valor){
        $this->_tablero[$fila][$columna]->valor = $valor;
        $ini = construirInicio($valor,$fila,$columna);        
        $this->actualizar_posibles($ini);
    }
    
    public function xyWing(){
        $todosLosPosibles = $this->todos_los_posibles_valores(false);
       
        $dosPosibles = $todosLosPosibles[2];
        foreach($dosPosibles as $dosPosible){
            
            $parConjugadoX = $this->parConjugado($dosPosible, array_values($dosPosible->posibles)[0],null, $todosLosPosibles);
            if($parConjugadoX != null){
                $parConjugadoY = $this->parConjugado($dosPosible, array_values($dosPosible->posibles)[1],array_values($dosPosible->posibles)[1], $todosLosPosibles);
                if($parConjugadoY != null){
                    $this->eliminarOpcionXYWing($dosPosible,$parConjugadoX,$parConjugadoY, array_values($dosPosible->posibles)[1]);
                }
            }
        }
    }
    
    public function parConjugado($celda, $valor,$valor2, $todosLosPosibles){
        foreach($todosLosPosibles as $cantidad => $posiblesPorCantidad){
            if($cantidad > 1){
                foreach($posiblesPorCantidad as $posibles){
                    if($posibles != $celda){
                        if(in_array($valor, $posibles->posibles)){
                            if($valor2 == null){
                                return $posibles;
                            }else{
                                if(in_array($valor2, $posibles->posibles)){
                                    return $posibles;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
    public function eliminarOpcionXYWing($dosPosible,$parConjugadoX,$parConjugadoY, $valorzZ){
        $compartenGrupo = $this->obtenerCeldasDeGrupoDeconflicto($parConjugadoX,$parConjugadoY);
        
        foreach($compartenGrupo as $celda){
            if($celda != $dosPosible){
                $this->borrarElemento($celda, $valorzZ);
            }
        }
    }
    
    public function obtenerCeldasDeGrupoDeconflicto($parConjugadoX,$parConjugadoY){
        $celdas = new arreglo_posibles_valores();
        if($parConjugadoX->fila == $parConjugadoY->fila){
            for($i = 0; $i < 9; $i++){
                if($i != $parConjugadoY->columna && $parConjugadoX->columna != $i){
                    $celdas->agregar($parConjugadoX->fila,$i,$this->_tablero[$parConjugadoX->fila][$i]->posibles);
                }
            }
        }
        if($parConjugadoX->columna == $parConjugadoY->columna){
            for($i = 0; $i < 9; $i++){
                if($i != $parConjugadoY->fila && $parConjugadoX->fila != $i){
                    $celdas->agregar($parConjugadoX->columna,$i,$this->_tablero[$parConjugadoX->fila][$i]->posibles);
                }
            }
        }
        
        if($parConjugadoX->fila <3 && $parConjugadoY->fila< 3 && $parConjugadoX->columna <3 && $parConjugadoY->columna< 3){
            for($i = 0;$i<3;$i++){
                for($a = 0;$a<3;$a++){
                    if( ($i != $parConjugadoX->fila || $a != $parConjugadoX->columna) && ($i != $parConjugadoY->fila || $a != $parConjugadoY->columna)){
                        $celdas->agregar($parConjugadoX->columna,$i,$this->_tablero[$parConjugadoX->fila][$i]->posibles);
                    }
                }
            }
        }    
        
        $celdas = $this->obtenerCeldasConflictoEnCuadrante($parConjugadoX,$parConjugadoY, $celdas, 3);
        $celdas = $this->obtenerCeldasConflictoEnCuadrante($parConjugadoX,$parConjugadoY, $celdas, 6);
        $celdas = $this->obtenerCeldasConflictoEnCuadrante($parConjugadoX,$parConjugadoY, $celdas, 9);
        return $celdas;
    }
    
    protected function obtenerCeldasConflictoEnCuadrante($parConjugadoX,$parConjugadoY, $celdas, $cuadrante){
        if($parConjugadoX->fila <$cuadrante && $parConjugadoY->fila< $cuadrante && $parConjugadoX->columna <$cuadrante && $parConjugadoY->columna< $cuadrante){
            if($parConjugadoX->fila > ($cuadrante - 3) && $parConjugadoY->fila > ($cuadrante - 3) && $parConjugadoX->columna > ($cuadrante - 3) && $parConjugadoY->columna > ($cuadrante - 3)){
                for($i = ($cuadrante - 3);$i<$cuadrante;$i++){
                    for($a = ($cuadrante - 3);$a<$cuadrante;$a++){
                        if( ($i != $parConjugadoX->fila || $a != $parConjugadoX->columna) && ($i != $parConjugadoY->fila || $a != $parConjugadoY->columna)){
                            $celdas->agregar($parConjugadoX->columna,$i,$this->_tablero[$parConjugadoX->fila][$i]->posibles);
                        }
                    }
                }
            }
        }
        return $celdas;
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

Class arreglo_posibles_valores{
    
    protected $_arreglo;
    public function __construct(){
        $this->_arreglo = array_fill(1, 9, array());
    }
    
    public function agregar($fila,$columna,$posibles){
        $oPosbiles = new stdClass();
        $oPosbiles->fila = $fila;
        $oPosbiles->columna = $columna;
        $oPosbiles->posibles = $posibles;
        $this->_arreglo[count($posibles)][] = $oPosbiles;
    }
    
    public function obtener_ordenados(){
        ksort($this->_arreglo);
        $resultado = array();
        foreach($this->_arreglo as $aPosibles){
            foreach($aPosibles as $oPosible){
                $resultado[] = $oPosible;
            }
        }
        return $resultado;
    }
    
    public function obtener(){
        return $this->_arreglo;
    }
    
    
}
