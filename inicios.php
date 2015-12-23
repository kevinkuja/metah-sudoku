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

function inicio1A(){
    $iniciales = array();
    array_push($iniciales, construirInicio(4,0,1));
    array_push($iniciales, construirInicio(1,0,6));
    array_push($iniciales, construirInicio(7,0,7));
    array_push($iniciales, construirInicio(9,0,8));
    
    array_push($iniciales, construirInicio(2,1,2));
    array_push($iniciales, construirInicio(8,1,5));
    array_push($iniciales, construirInicio(5,1,7));
    array_push($iniciales, construirInicio(4,1,8));
    
    array_push($iniciales, construirInicio(6,2,2));
    array_push($iniciales, construirInicio(5,2,5));
    array_push($iniciales, construirInicio(8,2,8));
    
    array_push($iniciales, construirInicio(8,3,1));
    array_push($iniciales, construirInicio(7,3,4));
    array_push($iniciales, construirInicio(9,3,6));
    array_push($iniciales, construirInicio(1,3,7));
    
    array_push($iniciales, construirInicio(5,4,1));
    array_push($iniciales, construirInicio(9,4,4));    
    array_push($iniciales, construirInicio(3,4,7));
    
    array_push($iniciales, construirInicio(1,5,1));
    array_push($iniciales, construirInicio(9,5,2));
    array_push($iniciales, construirInicio(6,5,4));
    array_push($iniciales, construirInicio(4,5,7));
    
    array_push($iniciales, construirInicio(3,6,0));
    array_push($iniciales, construirInicio(4,6,3));    
    array_push($iniciales, construirInicio(7,6,6));
    
    array_push($iniciales, construirInicio(5,7,0));
    array_push($iniciales, construirInicio(7,7,1));
    array_push($iniciales, construirInicio(1,7,3));
    array_push($iniciales, construirInicio(2,7,6));
    
    array_push($iniciales, construirInicio(9,8,0));
    array_push($iniciales, construirInicio(2,8,1));
    array_push($iniciales, construirInicio(8,8,2));
    array_push($iniciales, construirInicio(6,8,7));
    return $iniciales;
}

function inicio4A(){
    $iniciales = array();
    array_push($iniciales, construirInicio(5,0,1));
    array_push($iniciales, construirInicio(9,0,4));
    
    array_push($iniciales, construirInicio(4,1,2));
    array_push($iniciales, construirInicio(8,1,3));
    array_push($iniciales, construirInicio(9,1,8));
    
    array_push($iniciales, construirInicio(1,2,3));
    array_push($iniciales, construirInicio(7,2,5));
    array_push($iniciales, construirInicio(2,2,6));
    array_push($iniciales, construirInicio(8,2,7));
    
    array_push($iniciales, construirInicio(5,3,0));
    array_push($iniciales, construirInicio(6,3,1));
    array_push($iniciales, construirInicio(1,3,6));
    array_push($iniciales, construirInicio(3,3,7));
    array_push($iniciales, construirInicio(7,3,8));
    
    array_push($iniciales, construirInicio(1,5,0));
    array_push($iniciales, construirInicio(7,5,1));
    array_push($iniciales, construirInicio(3,5,2));
    array_push($iniciales, construirInicio(4,5,7));
    array_push($iniciales, construirInicio(2,5,8));
    
    array_push($iniciales, construirInicio(2,6,1));
    array_push($iniciales, construirInicio(1,6,2));    
    array_push($iniciales, construirInicio(5,6,3));
    array_push($iniciales, construirInicio(8,6,5));
    
    array_push($iniciales, construirInicio(6,7,0));
    array_push($iniciales, construirInicio(3,7,5));
    array_push($iniciales, construirInicio(8,7,6));    
    
    array_push($iniciales, construirInicio(1,8,4));
    array_push($iniciales, construirInicio(6,8,7));
    return $iniciales;
}

function inicioEasyA(){
    $iniciales = array();
    array_push($iniciales, construirInicio(2,0,2));
    array_push($iniciales, construirInicio(5,0,6));
    
    array_push($iniciales, construirInicio(1,1,1));
    array_push($iniciales, construirInicio(7,1,3));
    array_push($iniciales, construirInicio(5,1,5));
    array_push($iniciales, construirInicio(2,1,7));
    
    array_push($iniciales, construirInicio(4,2,0));
    array_push($iniciales, construirInicio(9,2,4));
    array_push($iniciales, construirInicio(7,2,8));
    
    array_push($iniciales, construirInicio(4,3,1));
    array_push($iniciales, construirInicio(9,3,2));
    array_push($iniciales, construirInicio(7,3,6));
    array_push($iniciales, construirInicio(3,3,7));
    
    array_push($iniciales, construirInicio(8,4,0));
    array_push($iniciales, construirInicio(1,4,2));
    array_push($iniciales, construirInicio(3,4,4));
    array_push($iniciales, construirInicio(4,4,6));
    
    array_push($iniciales, construirInicio(3,5,1));
    array_push($iniciales, construirInicio(6,5,2));
    array_push($iniciales, construirInicio(2,5,6));
    array_push($iniciales, construirInicio(1,5,7));
    
    array_push($iniciales, construirInicio(2,6,0));
    array_push($iniciales, construirInicio(8,6,4));
    array_push($iniciales, construirInicio(4,6,8));
    
    array_push($iniciales, construirInicio(8,7,1));
    array_push($iniciales, construirInicio(9,7,3));
    array_push($iniciales, construirInicio(2,7,5));
    array_push($iniciales, construirInicio(6,7,7));
    
    array_push($iniciales, construirInicio(7,8,2));
    array_push($iniciales, construirInicio(8,8,6));
    return $iniciales;
}

function inicioEasyB(){
    $iniciales = array();
    array_push($iniciales, construirInicio(5,0,1));
    array_push($iniciales, construirInicio(1,0,4));
    array_push($iniciales, construirInicio(4,0,7));
    
    array_push($iniciales, construirInicio(1,1,0));
    array_push($iniciales, construirInicio(7,1,2));
    array_push($iniciales, construirInicio(6,1,6));
    array_push($iniciales, construirInicio(2,1,8));
    
    array_push($iniciales, construirInicio(9,2,3));
    array_push($iniciales, construirInicio(5,2,5));
        
    array_push($iniciales, construirInicio(2,3,0));
    array_push($iniciales, construirInicio(8,3,2));
    array_push($iniciales, construirInicio(3,3,4));
    array_push($iniciales, construirInicio(5,3,6));
    array_push($iniciales, construirInicio(1,3,8));
    
    array_push($iniciales, construirInicio(4,4,1));
    array_push($iniciales, construirInicio(7,4,4));
    array_push($iniciales, construirInicio(2,4,7));
    
    array_push($iniciales, construirInicio(9,5,0));
    array_push($iniciales, construirInicio(1,5,2));
    array_push($iniciales, construirInicio(8,5,4));
    array_push($iniciales, construirInicio(4,5,6));
    array_push($iniciales, construirInicio(6,5,8));
    
    array_push($iniciales, construirInicio(4,6,3));
    array_push($iniciales, construirInicio(1,6,5));
    
    array_push($iniciales, construirInicio(3,7,0));
    array_push($iniciales, construirInicio(4,7,2));
    array_push($iniciales, construirInicio(7,7,6));
    array_push($iniciales, construirInicio(9,7,8));
    
    array_push($iniciales, construirInicio(2,8,1));
    array_push($iniciales, construirInicio(6,8,4));
    array_push($iniciales, construirInicio(1,8,7));
    return $iniciales;
}

function inicioEasyC(){
    $iniciales = array();
    array_push($iniciales, construirInicio(6,0,3));
    array_push($iniciales, construirInicio(2,0,5));
    
    array_push($iniciales, construirInicio(4,1,0));
    array_push($iniciales, construirInicio(5,1,4));
    array_push($iniciales, construirInicio(1,1,8));
    
    array_push($iniciales, construirInicio(8,2,1));
    array_push($iniciales, construirInicio(5,2,2));
    array_push($iniciales, construirInicio(1,2,4));
    array_push($iniciales, construirInicio(6,2,6));
    array_push($iniciales, construirInicio(2,2,7));
        
    array_push($iniciales, construirInicio(3,3,1));
    array_push($iniciales, construirInicio(8,3,2));
    array_push($iniciales, construirInicio(2,3,3));
    array_push($iniciales, construirInicio(6,3,5));
    array_push($iniciales, construirInicio(7,3,6));
    array_push($iniciales, construirInicio(1,3,7));
    
    array_push($iniciales, construirInicio(1,5,1));
    array_push($iniciales, construirInicio(9,5,2));
    array_push($iniciales, construirInicio(4,5,3));
    array_push($iniciales, construirInicio(7,5,5));
    array_push($iniciales, construirInicio(3,5,6));
    array_push($iniciales, construirInicio(5,5,7));
    
    array_push($iniciales, construirInicio(2,6,1));
    array_push($iniciales, construirInicio(6,6,2));
    array_push($iniciales, construirInicio(4,6,4));
    array_push($iniciales, construirInicio(5,6,6));
    array_push($iniciales, construirInicio(3,6,7));
    
    array_push($iniciales, construirInicio(9,7,0));
    array_push($iniciales, construirInicio(2,7,4));
    array_push($iniciales, construirInicio(7,7,8));
    
    array_push($iniciales, construirInicio(8,8,3));
    array_push($iniciales, construirInicio(9,8,5));
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

function inicioRandom($valoresRandom, $seed = null){
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
if($seed !== null)
    mt_srand($seed);
shuffle($celdas);
for($i = 0; $i < $valoresRandom; $i++){
	array_push($random, $iniciales[$celdas[$i]]);
}
return $random;
}

function inicioEasyD(){
    $iniciales = array();
    array_push($iniciales, construirInicio(1,0,2));
    array_push($iniciales, construirInicio(5,0,4));
    array_push($iniciales, construirInicio(7,0,8));
    array_push($iniciales, construirInicio(4,1,0));
    array_push($iniciales, construirInicio(2,1,1));
    array_push($iniciales, construirInicio(3,1,5));
    array_push($iniciales, construirInicio(8,1,6));
    array_push($iniciales, construirInicio(6,1,8));
    array_push($iniciales, construirInicio(8,2,2));
    array_push($iniciales, construirInicio(1,2,7));
    array_push($iniciales, construirInicio(9,2,8));
    array_push($iniciales, construirInicio(2,3,5));
    array_push($iniciales, construirInicio(8,4,0));
    array_push($iniciales, construirInicio(1,4,1));
    array_push($iniciales, construirInicio(5,4,2));
    array_push($iniciales, construirInicio(7,4,3));
    array_push($iniciales, construirInicio(4,4,4));
    array_push($iniciales, construirInicio(6,4,5));
    array_push($iniciales, construirInicio(9,4,6));
    array_push($iniciales, construirInicio(3,4,7));
    array_push($iniciales, construirInicio(2,4,8));
    array_push($iniciales, construirInicio(5,5,3));
    array_push($iniciales, construirInicio(6,6,0));
    array_push($iniciales, construirInicio(8,6,1));
    array_push($iniciales, construirInicio(7,6,6));
    array_push($iniciales, construirInicio(3,7,0));
    array_push($iniciales, construirInicio(9,7,2));
    array_push($iniciales, construirInicio(4,7,3));
    array_push($iniciales, construirInicio(8,7,7));
    array_push($iniciales, construirInicio(5,7,8));
    array_push($iniciales, construirInicio(1,8,0));
    array_push($iniciales, construirInicio(7,8,4));
    array_push($iniciales, construirInicio(2,8,6));
    
    return $iniciales;
}

function inicioEasyE(){
    $iniciales = array();
    array_push($iniciales, construirInicio(7,0,2));
    array_push($iniciales, construirInicio(3,0,3));
    array_push($iniciales, construirInicio(1,0,5));
    array_push($iniciales, construirInicio(5,0,6));
    array_push($iniciales, construirInicio(8,0,7));
    array_push($iniciales, construirInicio(8,1,3));
    array_push($iniciales, construirInicio(9,1,5));
    array_push($iniciales, construirInicio(4,1,6));
    array_push($iniciales, construirInicio(3,1,8));
    array_push($iniciales, construirInicio(5,2,4));
    array_push($iniciales, construirInicio(6,2,5));
    array_push($iniciales, construirInicio(1,2,7));
    array_push($iniciales, construirInicio(5,3,0));
    array_push($iniciales, construirInicio(6,3,2));
    array_push($iniciales, construirInicio(8,3,6));
    array_push($iniciales, construirInicio(2,3,7));
    array_push($iniciales, construirInicio(1,3,8));
    array_push($iniciales, construirInicio(3,4,1));
    array_push($iniciales, construirInicio(9,4,7));
    array_push($iniciales, construirInicio(1,5,0));
    array_push($iniciales, construirInicio(2,5,1));
    array_push($iniciales, construirInicio(4,5,2));
    array_push($iniciales, construirInicio(3,5,6));
    array_push($iniciales, construirInicio(7,5,8));
    array_push($iniciales, construirInicio(7,6,1));
    array_push($iniciales, construirInicio(1,6,3));
    array_push($iniciales, construirInicio(6,6,4));
    array_push($iniciales, construirInicio(6,7,0));
    array_push($iniciales, construirInicio(2,7,2));
    array_push($iniciales, construirInicio(9,7,3));
    array_push($iniciales, construirInicio(7,7,5));
    array_push($iniciales, construirInicio(5,8,1));
    array_push($iniciales, construirInicio(1,8,2));
    array_push($iniciales, construirInicio(4,8,3));
    array_push($iniciales, construirInicio(3,8,5));
    array_push($iniciales, construirInicio(9,8,6));

    
    return $iniciales;
}

function inicioMediumA(){
    $iniciales = array();
    array_push($iniciales, construirInicio(9,0,0));
    array_push($iniciales, construirInicio(2,0,2));
    array_push($iniciales, construirInicio(5,0,4));
    array_push($iniciales, construirInicio(1,1,3));
    array_push($iniciales, construirInicio(8,2,0));
    array_push($iniciales, construirInicio(1,2,1));
    array_push($iniciales, construirInicio(3,2,5));
    array_push($iniciales, construirInicio(5,2,6));
    array_push($iniciales, construirInicio(2,3,0));
    array_push($iniciales, construirInicio(4,3,1));
    array_push($iniciales, construirInicio(3,3,4));
    array_push($iniciales, construirInicio(7,3,6));
    array_push($iniciales, construirInicio(5,3,8));
    array_push($iniciales, construirInicio(5,4,2));
    array_push($iniciales, construirInicio(9,4,3));
    array_push($iniciales, construirInicio(4,4,4));
    array_push($iniciales, construirInicio(1,4,5));
    array_push($iniciales, construirInicio(3,4,6));
    array_push($iniciales, construirInicio(3,5,0));
    array_push($iniciales, construirInicio(9,5,2));
    array_push($iniciales, construirInicio(7,5,4));
    array_push($iniciales, construirInicio(4,5,7));
    array_push($iniciales, construirInicio(1,5,8));
    array_push($iniciales, construirInicio(3,6,2));
    array_push($iniciales, construirInicio(2,6,3));
    array_push($iniciales, construirInicio(1,6,7));
    array_push($iniciales, construirInicio(8,6,8));
    array_push($iniciales, construirInicio(9,7,5));
    array_push($iniciales, construirInicio(8,8,4));
    array_push($iniciales, construirInicio(6,8,6));
    array_push($iniciales, construirInicio(7,8,8));
    
    return $iniciales;
}

function inicioMediumB(){
    $iniciales = array();
    array_push($iniciales, construirInicio(3,0,2));
    array_push($iniciales, construirInicio(8,0,3));
    array_push($iniciales, construirInicio(9,0,5));
    array_push($iniciales, construirInicio(7,0,7));
    array_push($iniciales, construirInicio(7,1,2));
    array_push($iniciales, construirInicio(8,2,1));
    array_push($iniciales, construirInicio(6,2,4));
    array_push($iniciales, construirInicio(7,2,5));
    array_push($iniciales, construirInicio(3,2,7));
    array_push($iniciales, construirInicio(9,2,8));
    array_push($iniciales, construirInicio(7,3,0));
    array_push($iniciales, construirInicio(6,3,2));
    array_push($iniciales, construirInicio(2,3,3));
    array_push($iniciales, construirInicio(8,3,5));
    array_push($iniciales, construirInicio(9,3,7));
    array_push($iniciales, construirInicio(5,4,2));
    array_push($iniciales, construirInicio(7,4,6));
    array_push($iniciales, construirInicio(3,5,1));
    array_push($iniciales, construirInicio(9,5,3));
    array_push($iniciales, construirInicio(4,5,5));
    array_push($iniciales, construirInicio(6,5,6));
    array_push($iniciales, construirInicio(1,5,8));
    array_push($iniciales, construirInicio(3,6,0));
    array_push($iniciales, construirInicio(7,6,1));
    array_push($iniciales, construirInicio(5,6,3));
    array_push($iniciales, construirInicio(1,6,4));
    array_push($iniciales, construirInicio(4,6,7));
    array_push($iniciales, construirInicio(1,7,6));
    array_push($iniciales, construirInicio(2,8,1));
    array_push($iniciales, construirInicio(4,8,3));
    array_push($iniciales, construirInicio(3,8,5));
    array_push($iniciales, construirInicio(5,8,6));

    
    return $iniciales;
}

function inicioMediumC(){
    $iniciales = array();
    array_push($iniciales, construirInicio(4,0,1));
    array_push($iniciales, construirInicio(5,0,3));
    array_push($iniciales, construirInicio(3,0,5));
    array_push($iniciales, construirInicio(8,1,2));
    array_push($iniciales, construirInicio(2,1,4));
    array_push($iniciales, construirInicio(6,1,5));
    array_push($iniciales, construirInicio(4,2,3));
    array_push($iniciales, construirInicio(8,2,5));
    array_push($iniciales, construirInicio(3,2,6));
    array_push($iniciales, construirInicio(6,2,7));
    array_push($iniciales, construirInicio(1,3,1));
    array_push($iniciales, construirInicio(2,3,6));
    array_push($iniciales, construirInicio(5,4,0));
    array_push($iniciales, construirInicio(4,4,2));
    array_push($iniciales, construirInicio(7,4,6));
    array_push($iniciales, construirInicio(3,4,8));
    array_push($iniciales, construirInicio(6,5,2));
    array_push($iniciales, construirInicio(8,5,7));
    array_push($iniciales, construirInicio(6,6,1));
    array_push($iniciales, construirInicio(7,6,2));
    array_push($iniciales, construirInicio(8,6,3));
    array_push($iniciales, construirInicio(4,6,5));
    array_push($iniciales, construirInicio(6,7,3));
    array_push($iniciales, construirInicio(9,7,4));
    array_push($iniciales, construirInicio(8,7,6));
    array_push($iniciales, construirInicio(7,8,3));
    array_push($iniciales, construirInicio(2,8,5));
    array_push($iniciales, construirInicio(3,8,7));

    
    return $iniciales;
}

function inicioMediumD(){
    $iniciales = array();
    array_push($iniciales, construirInicio(3,0,0));
    array_push($iniciales, construirInicio(1,0,3));
    array_push($iniciales, construirInicio(4,0,7));
    array_push($iniciales, construirInicio(9,0,8));
    array_push($iniciales, construirInicio(9,1,3));
    array_push($iniciales, construirInicio(7,1,8));
    array_push($iniciales, construirInicio(5,2,0));
    array_push($iniciales, construirInicio(4,2,5));
    array_push($iniciales, construirInicio(8,2,6));
    array_push($iniciales, construirInicio(1,2,7));
    array_push($iniciales, construirInicio(9,3,6));
    array_push($iniciales, construirInicio(7,3,7));
    array_push($iniciales, construirInicio(1,3,8));
    array_push($iniciales, construirInicio(4,4,1));
    array_push($iniciales, construirInicio(6,4,7));
    array_push($iniciales, construirInicio(1,5,0));
    array_push($iniciales, construirInicio(2,5,1));
    array_push($iniciales, construirInicio(8,5,2));
    array_push($iniciales, construirInicio(9,6,1));
    array_push($iniciales, construirInicio(1,6,2));
    array_push($iniciales, construirInicio(4,6,3));
    array_push($iniciales, construirInicio(2,6,8));
    array_push($iniciales, construirInicio(2,7,0));
    array_push($iniciales, construirInicio(9,7,5));
    array_push($iniciales, construirInicio(7,8,0));
    array_push($iniciales, construirInicio(5,8,1));
    array_push($iniciales, construirInicio(2,8,5));
    array_push($iniciales, construirInicio(4,8,8));

    
    return $iniciales;
}

function inicioMediumE(){
    $iniciales = array();
    array_push($iniciales, construirInicio(9,0,));
    array_push($iniciales, construirInicio(8,0,));
    array_push($iniciales, construirInicio(5,0,));
    array_push($iniciales, construirInicio(2,0,));
    array_push($iniciales, construirInicio(7,1,));
    array_push($iniciales, construirInicio(9,1,));
    array_push($iniciales, construirInicio(4,1,));
    array_push($iniciales, construirInicio(4,2,));
    array_push($iniciales, construirInicio(8,2,));
    array_push($iniciales, construirInicio(9,2,));
    array_push($iniciales, construirInicio(9,3,));
    array_push($iniciales, construirInicio(3,3,));
    array_push($iniciales, construirInicio(2,3,));
    array_push($iniciales, construirInicio(8,4,));
    array_push($iniciales, construirInicio(6,4,));
    array_push($iniciales, construirInicio(5,4,));
    array_push($iniciales, construirInicio(7,4,));
    array_push($iniciales, construirInicio(2,5,));
    array_push($iniciales, construirInicio(6,5,));
    array_push($iniciales, construirInicio(3,5,));
    array_push($iniciales, construirInicio(5,6,));
    array_push($iniciales, construirInicio(3,6,));
    array_push($iniciales, construirInicio(9,6,));
    array_push($iniciales, construirInicio(6,7,));
    array_push($iniciales, construirInicio(7,7,));
    array_push($iniciales, construirInicio(3,7,));
    array_push($iniciales, construirInicio(7,8,));
    array_push($iniciales, construirInicio(5,8,));
    array_push($iniciales, construirInicio(8,8,));
    array_push($iniciales, construirInicio(1,8,));
    
    return $iniciales;
}

function inicioHardA(){
    $iniciales = array();
    array_push($iniciales, construirInicio(6,0,2));
    array_push($iniciales, construirInicio(8,0,4));
    array_push($iniciales, construirInicio(3,0,5));
    array_push($iniciales, construirInicio(1,0,7));
    array_push($iniciales, construirInicio(8,1,0));
    array_push($iniciales, construirInicio(4,1,1));
    array_push($iniciales, construirInicio(5,2,1));
    array_push($iniciales, construirInicio(9,2,5));
    array_push($iniciales, construirInicio(3,2,8));
    array_push($iniciales, construirInicio(5,3,0));
    array_push($iniciales, construirInicio(2,3,4));
    array_push($iniciales, construirInicio(9,3,8));
    array_push($iniciales, construirInicio(9,4,2));
    array_push($iniciales, construirInicio(7,4,4));
    array_push($iniciales, construirInicio(6,4,6));
    array_push($iniciales, construirInicio(6,5,0));
    array_push($iniciales, construirInicio(5,5,4));
    array_push($iniciales, construirInicio(4,5,8));
    array_push($iniciales, construirInicio(2,6,0));
    array_push($iniciales, construirInicio(8,6,3));
    array_push($iniciales, construirInicio(9,6,7));
    array_push($iniciales, construirInicio(2,7,6));
    array_push($iniciales, construirInicio(1,7,8));
    array_push($iniciales, construirInicio(7,8,1));
    array_push($iniciales, construirInicio(1,8,3));
    array_push($iniciales, construirInicio(3,8,4));
    array_push($iniciales, construirInicio(8,8,6));

    
    return $iniciales;
}

function inicioHardB(){
    $iniciales = array();
    array_push($iniciales, construirInicio(4,0,4));
    array_push($iniciales, construirInicio(5,0,5));
    array_push($iniciales, construirInicio(2,1,3));
    array_push($iniciales, construirInicio(5,1,6));
    array_push($iniciales, construirInicio(3,2,0));
    array_push($iniciales, construirInicio(6,2,3));
    array_push($iniciales, construirInicio(8,2,5));
    array_push($iniciales, construirInicio(2,2,7));
    array_push($iniciales, construirInicio(1,3,1));
    array_push($iniciales, construirInicio(3,3,5));
    array_push($iniciales, construirInicio(2,3,6));
    array_push($iniciales, construirInicio(8,3,7));
    array_push($iniciales, construirInicio(6,4,1));
    array_push($iniciales, construirInicio(5,4,4));
    array_push($iniciales, construirInicio(1,4,7));
    array_push($iniciales, construirInicio(4,5,1));
    array_push($iniciales, construirInicio(2,5,2));
    array_push($iniciales, construirInicio(1,5,3));
    array_push($iniciales, construirInicio(7,5,7));
    array_push($iniciales, construirInicio(3,6,1));
    array_push($iniciales, construirInicio(7,6,3));
    array_push($iniciales, construirInicio(6,6,5));
    array_push($iniciales, construirInicio(9,6,8));
    array_push($iniciales, construirInicio(7,7,2));
    array_push($iniciales, construirInicio(1,7,5));
    array_push($iniciales, construirInicio(3,8,3));
    array_push($iniciales, construirInicio(9,8,4));

    
    return $iniciales;
}

function inicioHardC(){
    $iniciales = array();
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    array_push($iniciales, construirInicio(,,));
    
    return $iniciales;
}

function inicioHardD(){
    $iniciales = array();
    array_push($iniciales, construirInicio(5,0,0));
    array_push($iniciales, construirInicio(4,0,5));
    array_push($iniciales, construirInicio(2,1,2));
    array_push($iniciales, construirInicio(6,1,3));
    array_push($iniciales, construirInicio(9,1,7));
    array_push($iniciales, construirInicio(3,1,8));
    array_push($iniciales, construirInicio(7,2,3));
    array_push($iniciales, construirInicio(8,2,4));
    array_push($iniciales, construirInicio(2,2,8));
    array_push($iniciales, construirInicio(5,3,1));
    array_push($iniciales, construirInicio(7,3,6));
    array_push($iniciales, construirInicio(7,4,0));
    array_push($iniciales, construirInicio(8,4,2));
    array_push($iniciales, construirInicio(9,4,4));
    array_push($iniciales, construirInicio(2,4,6));
    array_push($iniciales, construirInicio(6,4,8));
    array_push($iniciales, construirInicio(4,5,2));
    array_push($iniciales, construirInicio(8,5,7));
    array_push($iniciales, construirInicio(1,6,0));
    array_push($iniciales, construirInicio(2,6,4));
    array_push($iniciales, construirInicio(5,6,5));
    array_push($iniciales, construirInicio(3,7,0));
    array_push($iniciales, construirInicio(9,7,1));
    array_push($iniciales, construirInicio(8,7,5));
    array_push($iniciales, construirInicio(1,7,6));
    array_push($iniciales, construirInicio(3,8,3));
    array_push($iniciales, construirInicio(8,8,8));

    
    return $iniciales;
}

function inicioHardE(){
    $iniciales = array();
    array_push($iniciales, construirInicio(9,0,2));
    array_push($iniciales, construirInicio(6,0,4));
    array_push($iniciales, construirInicio(4,0,6));
    array_push($iniciales, construirInicio(2,1,1));
    array_push($iniciales, construirInicio(9,1,7));
    array_push($iniciales, construirInicio(2,2,4));
    array_push($iniciales, construirInicio(9,2,5));
    array_push($iniciales, construirInicio(1,2,8));
    array_push($iniciales, construirInicio(8,3,1));
    array_push($iniciales, construirInicio(6,3,5));
    array_push($iniciales, construirInicio(5,3,6));
    array_push($iniciales, construirInicio(6,4,2));
    array_push($iniciales, construirInicio(1,4,3));
    array_push($iniciales, construirInicio(3,4,4));
    array_push($iniciales, construirInicio(2,4,5));
    array_push($iniciales, construirInicio(8,4,6));
    array_push($iniciales, construirInicio(2,5,2));
    array_push($iniciales, construirInicio(4,5,3));
    array_push($iniciales, construirInicio(1,5,7));
    array_push($iniciales, construirInicio(1,6,0));
    array_push($iniciales, construirInicio(9,6,3));
    array_push($iniciales, construirInicio(4,6,4));
    array_push($iniciales, construirInicio(5,7,1));
    array_push($iniciales, construirInicio(3,7,7));
    array_push($iniciales, construirInicio(8,8,2));
    array_push($iniciales, construirInicio(5,8,4));
    array_push($iniciales, construirInicio(7,8,6));
    
    return $iniciales;
}

function inicioEvil(){
    $iniciales = array();
    array_push($iniciales, construirInicio(5,0,3));
    array_push($iniciales, construirInicio(6,0,7));
    array_push($iniciales, construirInicio(6,1,0));
    array_push($iniciales, construirInicio(4,1,2));
    array_push($iniciales, construirInicio(1,1,4));
    array_push($iniciales, construirInicio(1,2,1));
    array_push($iniciales, construirInicio(2,2,2));
    array_push($iniciales, construirInicio(3,2,7));
    array_push($iniciales, construirInicio(4,2,8));
    array_push($iniciales, construirInicio(2,3,0));
    array_push($iniciales, construirInicio(1,3,2));
    array_push($iniciales, construirInicio(7,3,3));
    array_push($iniciales, construirInicio(5,4,4));
    array_push($iniciales, construirInicio(8,5,5));
    array_push($iniciales, construirInicio(4,5,6));
    array_push($iniciales, construirInicio(7,5,8));
    array_push($iniciales, construirInicio(4,6,0));
    array_push($iniciales, construirInicio(5,6,1));
    array_push($iniciales, construirInicio(6,6,6));
    array_push($iniciales, construirInicio(2,6,7));
    array_push($iniciales, construirInicio(4,7,4));
    array_push($iniciales, construirInicio(3,7,6));
    array_push($iniciales, construirInicio(8,7,8));
    array_push($iniciales, construirInicio(3,8,1));
    array_push($iniciales, construirInicio(9,8,5));

    
    return $iniciales;
}

?>
