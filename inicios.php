<?php

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


function inicioDiagonal(){
		$iniciales = array();
array_push($iniciales, construirInicio(1,0,0));
array_push($iniciales, construirInicio(2,1,1));
array_push($iniciales, construirInicio(3,2,2));
array_push($iniciales, construirInicio(4,3,3));
array_push($iniciales, construirInicio(5,4,4));
array_push($iniciales, construirInicio(6,5,5));
array_push($iniciales, construirInicio(7,6,6));
array_push($iniciales, construirInicio(8,7,7));
array_push($iniciales, construirInicio(9,8,8));


return $iniciales;
}

function inicioDiagonalcita(){
		$iniciales = array();
array_push($iniciales, construirInicio(1,0,0));
array_push($iniciales, construirInicio(2,1,1));
array_push($iniciales, construirInicio(3,2,2));
array_push($iniciales, construirInicio(4,3,3));
array_push($iniciales, construirInicio(5,4,4));
array_push($iniciales, construirInicio(6,5,5));
array_push($iniciales, construirInicio(7,6,6));
array_push($iniciales, construirInicio(8,7,7));
array_push($iniciales, construirInicio(9,8,8));

array_push($iniciales, construirInicio(1,3,1));
array_push($iniciales, construirInicio(2,4,2));
array_push($iniciales, construirInicio(3,5,3));
array_push($iniciales, construirInicio(4,6,4));
array_push($iniciales, construirInicio(5,7,5));
array_push($iniciales, construirInicio(6,8,6));

array_push($iniciales, construirInicio(9,2,0));



return $iniciales;
}

function inicioDiagonalcita2(){
		$iniciales = array();
array_push($iniciales, construirInicio(1,0,0));
array_push($iniciales, construirInicio(2,1,1));
array_push($iniciales, construirInicio(3,2,2));
array_push($iniciales, construirInicio(4,3,3));
array_push($iniciales, construirInicio(5,4,4));
array_push($iniciales, construirInicio(6,5,5));
array_push($iniciales, construirInicio(7,6,6));
array_push($iniciales, construirInicio(8,7,7));
array_push($iniciales, construirInicio(9,8,8));

array_push($iniciales, construirInicio(1,3,1));
array_push($iniciales, construirInicio(2,4,2));
array_push($iniciales, construirInicio(3,5,3));
array_push($iniciales, construirInicio(4,6,4));
array_push($iniciales, construirInicio(5,7,5));
array_push($iniciales, construirInicio(6,8,6));
array_push($iniciales, construirInicio(9,2,0));

array_push($iniciales, construirInicio(1,6,8));

array_push($iniciales, construirInicio(4,0,2));
array_push($iniciales, construirInicio(5,1,3));
array_push($iniciales, construirInicio(6,2,4));
array_push($iniciales, construirInicio(7,3,5));
array_push($iniciales, construirInicio(8,4,6));
array_push($iniciales, construirInicio(9,5,7));

return $iniciales;
}

function inicioCruzado(){
		$iniciales = array();
array_push($iniciales, construirInicio(1,0,0));
array_push($iniciales, construirInicio(2,1,1));
array_push($iniciales, construirInicio(3,2,2));
array_push($iniciales, construirInicio(4,3,3));
array_push($iniciales, construirInicio(5,4,4));
array_push($iniciales, construirInicio(6,5,5));
array_push($iniciales, construirInicio(7,6,6));
array_push($iniciales, construirInicio(8,7,7));
array_push($iniciales, construirInicio(9,8,8));

array_push($iniciales, construirInicio(1,3,1));
array_push($iniciales, construirInicio(2,4,2));
array_push($iniciales, construirInicio(3,5,3));
array_push($iniciales, construirInicio(4,6,4));
array_push($iniciales, construirInicio(5,7,5));
array_push($iniciales, construirInicio(6,8,6));
array_push($iniciales, construirInicio(9,2,0));

array_push($iniciales, construirInicio(1,6,8));

array_push($iniciales, construirInicio(4,0,2));
array_push($iniciales, construirInicio(5,1,3));
array_push($iniciales, construirInicio(6,2,4));
array_push($iniciales, construirInicio(7,3,5));
array_push($iniciales, construirInicio(8,4,6));
array_push($iniciales, construirInicio(9,5,7));

array_push($iniciales, construirInicio(3,0,8));
array_push($iniciales, construirInicio(4,1,7));
array_push($iniciales, construirInicio(5,2,6));
array_push($iniciales, construirInicio(7,2,8));
array_push($iniciales, construirInicio(2,0,6));
return $iniciales;
}

function inicioVacio(){
	return array();
}


function construirInicio($valor, $fila, $columna){
	$res = new stdClass();
	$res->valor = $valor;
	$res->fila = $fila;
	$res->columna = $columna;
	return $res;
}

function inicioRandom($valoresRandom){
	$iniciales = array();
array_push($iniciales, construirInicio(9,0,0));
array_push($iniciales, construirInicio(6,0,1));
array_push($iniciales, construirInicio(3,0,2));
array_push($iniciales, construirInicio(1,0,3));
array_push($iniciales, construirInicio(7,0,4));
array_push($iniciales, construirInicio(4,0,5));
array_push($iniciales, construirInicio(2,0,6));
array_push($iniciales, construirInicio(5,0,7));
array_push($iniciales, construirInicio(8,0,8));

array_push($iniciales, construirInicio(1,1,0));
array_push($iniciales, construirInicio(7,1,1));
array_push($iniciales, construirInicio(8,1,2));
array_push($iniciales, construirInicio(3,1,3));
array_push($iniciales, construirInicio(2,1,4));
array_push($iniciales, construirInicio(5,1,5));
array_push($iniciales, construirInicio(6,1,6));
array_push($iniciales, construirInicio(4,1,7));
array_push($iniciales, construirInicio(9,1,8));

array_push($iniciales, construirInicio(2,2,0));
array_push($iniciales, construirInicio(5,2,1));
array_push($iniciales, construirInicio(4,2,2));
array_push($iniciales, construirInicio(6,2,3));
array_push($iniciales, construirInicio(8,2,4));
array_push($iniciales, construirInicio(9,2,5));
array_push($iniciales, construirInicio(7,2,6));
array_push($iniciales, construirInicio(3,2,7));
array_push($iniciales, construirInicio(1,2,8));

array_push($iniciales, construirInicio(8,3,0));
array_push($iniciales, construirInicio(2,3,1));
array_push($iniciales, construirInicio(1,3,2));
array_push($iniciales, construirInicio(4,3,3));
array_push($iniciales, construirInicio(3,3,4));
array_push($iniciales, construirInicio(7,3,5));
array_push($iniciales, construirInicio(5,3,6));
array_push($iniciales, construirInicio(9,3,7));
array_push($iniciales, construirInicio(6,3,8));

array_push($iniciales, construirInicio(4,4,0));
array_push($iniciales, construirInicio(9,4,1));
array_push($iniciales, construirInicio(6,4,2));
array_push($iniciales, construirInicio(8,4,3));
array_push($iniciales, construirInicio(5,4,4));
array_push($iniciales, construirInicio(2,4,5));
array_push($iniciales, construirInicio(3,4,6));
array_push($iniciales, construirInicio(1,4,7));
array_push($iniciales, construirInicio(7,4,8));

array_push($iniciales, construirInicio(7,5,0));
array_push($iniciales, construirInicio(3,5,1));
array_push($iniciales, construirInicio(5,5,2));
array_push($iniciales, construirInicio(9,5,3));
array_push($iniciales, construirInicio(6,5,4));
array_push($iniciales, construirInicio(1,5,5));
array_push($iniciales, construirInicio(8,5,6));
array_push($iniciales, construirInicio(2,5,7));
array_push($iniciales, construirInicio(4,5,8));

array_push($iniciales, construirInicio(5,6,0));
array_push($iniciales, construirInicio(8,6,1));
array_push($iniciales, construirInicio(9,6,2));
array_push($iniciales, construirInicio(7,6,3));
array_push($iniciales, construirInicio(1,6,4));
array_push($iniciales, construirInicio(3,6,5));
array_push($iniciales, construirInicio(4,6,6));
array_push($iniciales, construirInicio(6,6,7));
array_push($iniciales, construirInicio(2,6,8));

array_push($iniciales, construirInicio(3,7,0));
array_push($iniciales, construirInicio(1,7,1));
array_push($iniciales, construirInicio(7,7,2));
array_push($iniciales, construirInicio(2,7,3));
array_push($iniciales, construirInicio(4,7,4));
array_push($iniciales, construirInicio(6,7,5));
array_push($iniciales, construirInicio(9,7,6));
array_push($iniciales, construirInicio(8,7,7));
array_push($iniciales, construirInicio(5,7,8));

array_push($iniciales, construirInicio(6,8,0));
array_push($iniciales, construirInicio(4,8,1));
array_push($iniciales, construirInicio(2,8,2));
array_push($iniciales, construirInicio(5,8,3));
array_push($iniciales, construirInicio(9,8,4));
array_push($iniciales, construirInicio(8,8,5));
array_push($iniciales, construirInicio(1,8,6));
array_push($iniciales, construirInicio(7,8,7));
array_push($iniciales, construirInicio(3,8,8));
$random = array();
$celdas = range(0,80);
shuffle($celdas);
for($i = 0; $i < $valoresRandom; $i++){
	array_push($random, $iniciales[$celdas[$i]]);
}
return $random;
}


?>