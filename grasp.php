<?php
ini_set('max_execution_time', 300);
define ("INICIAL", 1);
define ("CORRECTA", 2);
define ("INSEGURA", 3);
define ("RELLENO", 4);
define ("RANDOM", 5);

require_once('inicios.php');


resolverSudoku(inicio4A(30), 0.99, 0.5, 500000, 	1);


function resolverSudoku($inicio, $alfa, $gamma, $maxIter, $tempInicial){
	$tablero = inicializar($inicio);
	$sol = array();
	$tipos = array();
	buscarSolucionInicial($tablero, $sol, $proteccion);
	$mejorSudoku = $sol;
	$costoActual = $mejorCosto = costo($mejorSudoku);
	$it = 0;
	$temp = $tempInicial;
	echo "<br>COSTO:".$costoActual;
	imprimir($sol, $proteccion);
	flush();
	$yaUsadas = array();
	while($it < $maxIter && $mejorCosto != 0){
		$nuevaSol = busqLocal($sol, $proteccion, 1);
		$nuevoCosto = costo($nuevaSol);
		$e = exp(($costoActual- $nuevoCosto)/$temp);
		$rand = mt_rand() / mt_getrandmax();
		if ($it  % 100000 == 0){
			echo "IT: $it MEJOR: $mejorCosto ACTUAL: $costoActual NUEVO: $nuevoCosto",'<br>';
			echo "E: $e = exp($costoActual - $nuevoCosto / $temp) - RAND: $rand<br>";
		}
		if($rand < $e && !isset($yaUsadas[md5(serialize($nuevaSol))])){
			$sol = $nuevaSol;
			$costoActual = $nuevoCosto;
			$yaUsadas[md5(serialize($nuevaSol))] = true;
		}
		if($costoActual  < $mejorCosto){
			$mejorSudoku = $sol;
			$mejorCosto = $costoActual;
			$temp = $tempInicial;
		}
		if($nuevoCosto == 0){
			$sol = $nuevaSol;
			$costoActual = $nuevoCosto;
			break;
		}
		$temp = max(0.1,$alfa * $temp);
		$it++;


	}
	echo '<br><br><hr><br>';
	echo "ITERACIONES TOTALES: $it",'<br>';
	echo "COSTO:".costo($mejorSudoku);
	imprimir($mejorSudoku, $proteccion);
 	//print_r($yaUsadas);

	
}

function busqLocal($sol, &$proteccion, $e){
	$nuevaSol  = $sol;
	for($i = 0; $i < rand(1,9); $i++){
		$f1 = rand(0,8);
		$c1 = rand(0,8);
		$f2 = $f1 - $f1%3 +rand(0,2);
		$c2 = $c1 - $c1%3 + rand(0,2);
		if($proteccion[$f1][$c1] > CORRECTA && $proteccion[$f2][$c2] > CORRECTA){

		  $aux = $nuevaSol[$f1][$c1];;
		  $nuevaSol[$f1][$c1] = $nuevaSol[$f2][$c2];
		  $nuevaSol[$f2][$c2] = $aux;
		}
	}
	return $nuevaSol;
}
function buscarSolucionInicial($tablero,&$sudoku, &$tipos){
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
		$sudoku[$i][$j] = $tablero[$i][$j]->valor;
		$tipos[$i][$j] = $tablero[$i][$j]->tipo;
	}


}



function costo($sudoku, $imprimir = false){
	$costoFilas = array();
	$costoColumnas = array();
	for($i =0; $i < 9; $i++){
		$costoColumnas[$i] = array(0,0,0,0,0,0,0,0,0);
		$costoFilas[$i] = array(0,0,0,0,0,0,0,0,0);
	}
	$costo = 0;
	for($f = 0; $f < 9; $f++){
		for($c = 0; $c < 9; $c++){
			if($sudoku[$f][$c] !== null){
				$valor = $sudoku[$f][$c] -1;

				$costoColumnas[$c][$valor]++;
				if($costoColumnas[$c][$valor] > 1){
					$costo++;

					if($imprimir)
						echo "<br>FILA $f COLUMNA $c VALOR ".($valor+1);
				}
				$costoFilas[$f][$valor]++;
				if($costoFilas[$f][$valor] > 1){
					$costo++;
					if($imprimir)
						echo "<br>FILA $f COLUMNA $c VALOR ".($valor+1);

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
function imprimir(&$sudoku, &$proteccion){
	echo "<table border=1>";
	for($i = 0; $i <9; $i++){
		echo "<tr>";
		for($j = 0; $j <9; $j++){
			echo "<td width='20px' height='20px' style='text-align:center;".($j % 3 == 0 ? "border-left: 3px solid #000;" : "").($i % 3 == 0 ? "border-top: 3px solid #000;" : "")."'>";

			echo "<span style='".($proteccion[$i][$j]==INICIAL ? "color:blue;" : "").($proteccion[$i][$j]==CORRECTA ? "color:green;" : "")."'>";
			echo $sudoku[$i][$j];
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