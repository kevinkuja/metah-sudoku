<?php
define ("INICIAL", 1);
define ("CORRECTA", 2);
define ("INSEGURA", 3);
define ("RELLENO", 4);
define ("RANDOM", 5);

function inicio1(){
	$iniciales = array();
array_push($iniciales, construirInicio(6,0,1));
array_push($iniciales, construirInicio(1,0,3));
array_push($iniciales, construirInicio(4,0,5));
array_push($iniciales, construirInicio(5,0,7));

array_push($iniciales, construirInicio(8,1,2));
array_push($iniciales, construirInicio(3,1,3));
array_push($iniciales, construirInicio(5,1,5));
array_push($iniciales, construirInicio(6,1,6));

array_push($iniciales, construirInicio(2,2,0));
array_push($iniciales, construirInicio(1,2,8));

array_push($iniciales, construirInicio(8,3,0));
array_push($iniciales, construirInicio(4,3,3));
array_push($iniciales, construirInicio(7,3,5));
array_push($iniciales, construirInicio(6,3,8));

array_push($iniciales, construirInicio(6,4,2));
array_push($iniciales, construirInicio(3,4,6));

array_push($iniciales, construirInicio(7,5,0));
array_push($iniciales, construirInicio(9,5,3));
array_push($iniciales, construirInicio(1,5,5));
array_push($iniciales, construirInicio(4,5,8));

array_push($iniciales, construirInicio(5,6,0));
array_push($iniciales, construirInicio(2,6,8));

array_push($iniciales, construirInicio(7,7,2));
array_push($iniciales, construirInicio(2,7,3));
array_push($iniciales, construirInicio(6,7,5));
array_push($iniciales, construirInicio(9,7,6));

array_push($iniciales, construirInicio(4,8,1));
array_push($iniciales, construirInicio(5,8,3));
array_push($iniciales, construirInicio(8,8,5));
array_push($iniciales, construirInicio(7,8,7));

//PARA PROBAR AGREGO RESULTADOS
//array_push($iniciales, construirInicio(6,2,3)); 
//array_push($iniciales, construirInicio(8,7,7)); 
//array_push($iniciales, construirInicio(7,0,4)); 
//array_push($iniciales, construirInicio(1,7,1)); 
return $iniciales;
}

function inicio2(){
		$iniciales = array();
array_push($iniciales, construirInicio(8,0,0));
array_push($iniciales, construirInicio(3,1,2));
array_push($iniciales, construirInicio(6,1,3));
array_push($iniciales, construirInicio(7,2,1));
array_push($iniciales, construirInicio(9,2,4));
array_push($iniciales, construirInicio(2,2,6));
array_push($iniciales, construirInicio(5,3,1));
array_push($iniciales, construirInicio(7,3,5));
array_push($iniciales, construirInicio(4,4,4));
array_push($iniciales, construirInicio(5,4,5));
array_push($iniciales, construirInicio(7,4,6));
array_push($iniciales, construirInicio(1,5,3));
array_push($iniciales, construirInicio(3,5,7));
array_push($iniciales, construirInicio(1,6,2));
array_push($iniciales, construirInicio(6,6,7));
array_push($iniciales, construirInicio(8,6,8));
array_push($iniciales, construirInicio(8,7,2));
array_push($iniciales, construirInicio(5,7,3));
array_push($iniciales, construirInicio(1,7,7));
array_push($iniciales, construirInicio(9,8,1));
array_push($iniciales, construirInicio(4,8,3));

//PARA PROBAR AGREGO RESULTADOS
//array_push($iniciales, construirInicio(2,0,2)); 
//array_push($iniciales, construirInicio(1,0,1)); 

/*
array_push($iniciales, construirInicio(9,3,7)); 
array_push($iniciales, construirInicio(2,5,0)); 
//array_push($iniciales, construirInicio(8,5,1)); 
//array_push($iniciales, construirInicio(6,4,1)); 
array_push($iniciales, construirInicio(9,0,8)); 
array_push($iniciales, construirInicio(7,1,7)); 
array_push($iniciales, construirInicio(2,8,8)); */

return $iniciales;
}


function inicio3(){
		$iniciales = array();
array_push($iniciales, construirInicio(7,0,1));
array_push($iniciales, construirInicio(3,0,2));
array_push($iniciales, construirInicio(9,0,4));

array_push($iniciales, construirInicio(9,1,0));
array_push($iniciales, construirInicio(4,1,3));
array_push($iniciales, construirInicio(3,1,5));
array_push($iniciales, construirInicio(7,1,8));

array_push($iniciales, construirInicio(6,2,3));
array_push($iniciales, construirInicio(8,2,8));

array_push($iniciales, construirInicio(4,3,1));
array_push($iniciales, construirInicio(3,3,6));
array_push($iniciales, construirInicio(6,3,7));

array_push($iniciales, construirInicio(7,4,0));
array_push($iniciales, construirInicio(1,4,8));

array_push($iniciales, construirInicio(2,5,1));
array_push($iniciales, construirInicio(9,5,2));
array_push($iniciales, construirInicio(5,5,7));

array_push($iniciales, construirInicio(5,6,0));
array_push($iniciales, construirInicio(1,6,5));

array_push($iniciales, construirInicio(6,7,0));
array_push($iniciales, construirInicio(7,7,3));
array_push($iniciales, construirInicio(8,7,5));
array_push($iniciales, construirInicio(3,7,8));

array_push($iniciales, construirInicio(3,8,1));
array_push($iniciales, construirInicio(4,8,4));
array_push($iniciales, construirInicio(1,8,6));
array_push($iniciales, construirInicio(7,8,7));



return $iniciales;
}


resolverSudoku(inicio3(), 0.5);


function resolverSudoku($inicio, $alfa){
	$tablero = inicializar($inicio);
			

	//Buscar solucion inicial
	
	buscarSolucionInicial($tablero, $alfa);
	intentarSolucionar($tablero, 4);
	echo "<br>COSTO:".costo($tablero);
	imprimir($tablero);
	//print_r($tablero[2][1]);
}
	function buscarSolucionInicial(&$tablero){
		$filas = (range(0, 8) );
		$columnas = (range(0, 8)) ;

		shuffle($filas);
		shuffle($columnas);

		$cross = array_cartesian($filas, $columnas);
		shuffle($cross);
		intentarSolucionar($tablero, CORRECTA); 
				foreach($cross as $pos){
					$i = $pos[0];
					$j = $pos[1];
					if($tablero[$i][$j]->valor === null){
						if(sizeof($tablero[$i][$j]->posibles) > 0){
						//imprimir($tablero);
						$valorRandom = $tablero[$i][$j]->posibles[array_rand($tablero[$i][$j]->posibles)];
						if(!existeValorEnCuadrante($tablero, $valorRandom, $i, $j)){
							$tablero[$i][$j]->valor = $valorRandom;
							$tablero[$i][$j]->tipo = RANDOM;
							intentarSolucionar($tablero, 3); 
						}
						}else{
							$posibles = array_diff(range(1,9), posiblesValoresDelCuadrante($tablero, $i, $j));
							//print_r($posibles);
							foreach($posibles as $p){
								if(!existeValorEnCuadrante($tablero, $p, $i, $j))
								{
									$tablero[$i][$j]->valor = $p;
									$tablero[$i][$j]->tipo = RELLENO;
									intentarSolucionar($tablero, 4); 
									//echo "<br>$p $i $j";
								}
							}
							
						}
					}
				}

foreach($cross as $pos){
					$i = $pos[0];
					$j = $pos[1];
				//HAY QUE CONTROLAR UNA VEZ MAS SI SIGUE NULO Y LLENAR CON CUALQUIERA
							if($tablero[$i][$j]->valor === null){
								foreach($filas as $f){
									if(!existeValorEnCuadrante($tablero, $f+1, $i, $j))
										{
											$tablero[$i][$j]->valor = $f+1;
									$tablero[$i][$j]->tipo = RELLENO;
									intentarSolucionar($tablero, 4);
										}
								}
							}
						}
		
	}



	function costo($tablero){
		$costoFilas = array();
		$costoColumnas = array();
		for($i =0; $i < 9; $i++){
			$costoColumnas[$i] = array(0,0,0,0,0,0,0,0,0);
			$costoFilas[$i] = array(0,0,0,0,0,0,0,0,0);
		}
		$costo = 0;
		for($f = 0; $f < 9; $f++){
			for($c = 0; $c < 9; $c++){
				if($tablero[$f][$c]->valor !== null){
					$valor = $tablero[$f][$c]->valor -1;

					$costoColumnas[$c][$valor]++;
					if($costoColumnas[$c][$valor] > 1){
						$costo++;

						//echo "<br>FILA $f COLUMNA $c VALOR $valor ";
					}
					$costoFilas[$f][$valor]++;
					if($costoFilas[$f][$valor] > 1){
						$costo++;

						//echo "<br>FILA $f COLUMNA $c VALOR $valor";

					}

				}
			}
		}

		return $costo;
	}

	function inicializar($inicio){
				$tablero = array();
					// Cargar celdas iniciales
			for($i = 0; $i <9; $i++)
				for($j = 0; $j <9; $j++)
					$tablero[$i][$j] = new Celda(null, false);
			foreach($inicio as $ini){
				$tablero[$ini->fila][$ini->columna] = new Celda($ini->valor, INICIAL);
				for($f = 0; $f <9; $f++){
					if($f != $ini->fila && !$tablero[$f][$ini->columna]->tipo)
					{
						borrarElemento($tablero[$f][$ini->columna]->posibles, $tablero[$ini->fila][$ini->columna]->valor);
					}
				}

				for($c = 0; $c <9; $c++){
					if($c != $ini->columna && !$tablero[$ini->fila][$c]->tipo)
					{
						borrarElemento($tablero[$ini->fila][$c]->posibles, $tablero[$ini->fila][$ini->columna]->valor);
					}
				}

				for($i = $ini->fila - ($ini->fila % 3); $i <$ini->fila - ($ini->fila % 3)+3; $i++){
					for($j = $ini->columna - ($ini->columna % 3); $j <$ini->columna - ($ini->columna % 3)+3; $j++){
							if($i != $ini->fila && 
								$j != $ini->columna && 
								!$tablero[$i][$j]->tipo){
								borrarElemento($tablero[$i][$j]->posibles, $tablero[$ini->fila][$ini->columna]->valor);
							}
							
					}
				}
				
			}	
	return $tablero;

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

function construirInicio($valor, $fila, $columna){
	$res = new stdClass();
	$res->valor = $valor;
	$res->fila = $fila;
	$res->columna = $columna;
	return $res;
}

function intentarSolucionar($tablero, $tipo, $chequearCuadrante = false){
	$huboCambio = true;
	//if(true){
	$cant = 0;
	while($huboCambio){
		//echo ++$cant;
		$huboCambio = false;
		for($i = 0; $i <9; $i++){ 
			for($j = 0; $j <9; $j++){
				$noPosibles = array();
				if($tablero[$i][$j]->valor === null){
					for($f = 0; $f <9; $f++){

						if($i != $f)
							$noPosibles = array_unique(array_merge($noPosibles, $tablero[$f][$j]->posibles,[$tablero[$f][$j]->valor ]));
						if($tablero[$f][$j]->valor !== null){
							borrarElemento($tablero[$i][$j]->posibles, $tablero[$f][$j]->valor);
							if(sizeof($tablero[$i][$j]->posibles) == 1 && !existeValorEnCuadrante($tablero,array_values($tablero[$i][$j]->posibles)[0],$i,$j))	{
								$tablero[$i][$j]->valor = array_values($tablero[$i][$j]->posibles)[0];
								$tablero[$i][$j]->tipo = $tipo;
								$huboCambio = true;
							}
						}
					}

					for($c = 0; $c <9; $c++){
						if($j != $c)
							$noPosibles = array_unique(array_merge($noPosibles, $tablero[$i][$c]->posibles,[$tablero[$i][$c]->valor ]));
							if($tablero[$i][$c]->valor !== null){
							
							borrarElemento($tablero[$i][$j]->posibles, $tablero[$i][$c]->valor);
							if(sizeof($tablero[$i][$j]->posibles) == 1  && !existeValorEnCuadrante($tablero,array_values($tablero[$i][$j]->posibles)[0],$i,$j))	{
								$tablero[$i][$j]->valor = array_values($tablero[$i][$j]->posibles)[0];
								$tablero[$i][$j]->tipo = $tipo;
								$huboCambio = true;
							}
						}
					}

					for($f = $i - ($i % 3); $f <$i - ($i % 3) + 3; $f++){
						for($c = $j - ($j % 3); $c <$j - ($j % 3) + 3; $c++){
						if($i != $f && $j != $c)
							$noPosibles = array_unique(array_merge($noPosibles, $tablero[$f][$c]->posibles,[$tablero[$f][$c]->valor ]));
								if($f != $i && 
									$c != $j && 
									!$tablero[$f][$c]->tipo){
								borrarElemento($tablero[$f][$c]->posibles, $tablero[$i][$j]->valor);
							if(sizeof($tablero[$i][$j]->posibles) == 1 && !existeValorEnCuadrante($tablero,array_values($tablero[$i][$j]->posibles)[0],$i,$j))	{
								$tablero[$i][$j]->valor = array_values($tablero[$i][$j]->posibles)[0];
								$tablero[$i][$j]->tipo = $tipo;
								$huboCambio = true;
							}
									}
						}
					}

					$pos = array_diff($tablero[$i][$j]->posibles, $noPosibles);

					if(sizeof($pos) == 1  && !existeValorEnCuadrante($tablero,array_values($pos)[0],$i,$j)) {
						$tablero[$i][$j]->valor = array_values($pos)[0];
								$tablero[$i][$j]->tipo = $tipo;
								$huboCambio = true;
					}
					
				}
			}
		}
	}
}

function existeValorEnCuadrante($tablero, $valor, $fila, $columna){
	for($f = $fila - ($fila % 3); $f <$fila - ($fila % 3) + 3; $f++){
		for($c = $columna - ($columna % 3); $c <$columna - ($columna % 3) + 3; $c++){
			if($tablero[$f][$c]->valor === $valor)
				return true;
		}
	}
	return false;
}

//Junta de los elementos vacios del cuadrante sus posibles valores
function posiblesValoresDelCuadrante($tablero, $fila, $columna){
	$vals = array();
		for($f = $fila - ($fila % 3); $f <$fila - ($fila % 3) + 3; $f++){
		for($c = $columna - ($columna % 3); $c <$columna - ($columna % 3) + 3; $c++){
			if($tablero[$f][$c]->valor === null)
				$vals = array_merge($vals, $tablero[$f][$c]->posibles);
		}
	}
	return $vals;
}
function imprimir($tablero){
	echo "<table border=1>";
	for($i = 0; $i <9; $i++){
		echo "<tr>";
		for($j = 0; $j <9; $j++){
					echo "<td width='20px' height='20px' style='text-align:center;".($j % 3 == 0 ? "border-left: 3px solid #000;" : "").($i % 3 == 0 ? "border-top: 3px solid #000;" : "")."'>";

						echo "<span style='".($tablero[$i][$j]->tipo==INICIAL ? "color:blue;" : "").($tablero[$i][$j]->tipo==CORRECTA ? "color:green;" : "").($tablero[$i][$j]->tipo==3 ? "color:red;" : "").($tablero[$i][$j]->tipo==4 ? "color:gold;" : "").($tablero[$i][$j]->tipo==RANDOM ? "color:purple;" : "")."'>";
						echo $tablero[$i][$j]->valor;
						echo "</span>";
					
					echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

function  borrarElemento(&$array, $elem){
	foreach (array_keys($array, $elem, true) as $key) {
    unset($array[$key]);

}
}

function array_cartesian() {
    $_ = func_get_args();
    if(count($_) == 0)
        return array(array());
    $a = array_shift($_);
    $c = call_user_func_array(__FUNCTION__, $_);
    $r = array();
    foreach($a as $v)
        foreach($c as $p)
            $r[] = array_merge(array($v), $p);
    return $r;
}
?>