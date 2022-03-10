<?php
	require_once "../clases/Conexion.php";
    require_once "../clases/Metodos.php";

	$sueldo = $_POST['sueldo'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	$nacionalidad = $_POST['nacionalidad'];
    $antiguedad = $_POST['antiguedad'];
    $php = $_POST['php'];
    $asp = $_POST['asp'];
    $vb = $_POST['vb'];
    $java = $_POST['java'];
    $oracle = $_POST['oracle'];$bd = $_POST['bd'];
    $bono;
    // Porcentajes solitarios
    // Edad
    if ($edad >= 45) {
        $bono = $sueldo + ($sueldo/100*2);
    // Sexo
    }else if($sexo=="Femenino"){
        $bono = $sueldo + ($sueldo/100*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero") {
        $bono = $sueldo - ($sueldo/100*5);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino"){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero"){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero"){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero"){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5);
    
    // --> Porcentajes con PHP
    // Edad
    }else if ($edad >= 45 && $php==1) {
        $bono = $sueldo + ($sueldo/100*2) + (20*3);
    // Sexo
    }else if($sexo=="Femenino" && $php==1){
        $bono = $sueldo + ($sueldo/100*3) + (20*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero" && $php==1) {
        $bono = $sueldo - ($sueldo/100*5) + (20*3);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino" && $php==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) + (20*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero" && $php==1){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5) + (20*3);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero" && $php==1){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5) + (20*3);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero" && $php==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5) + (20*3);
    
    // --> Porcentajes con Java
    // Edad
    }else if ($edad >= 45 && $java==1) {
        $bono = $sueldo + ($sueldo/100*2) + (35*3);
    // Sexo
    }else if($sexo=="Femenino" && $java==1){
        $bono = $sueldo + ($sueldo/100*3) + (35*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero" && $java==1) {
        $bono = $sueldo - ($sueldo/100*5) + (35*3);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino" && $java==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) + (35*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero" && $java==1){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5) + (35*3);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero" && $java==1){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5) + (35*3);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero" && $java==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5) + (35*3);
    
    // --> Porcentajes con ASP.Net
    // Edad
    }else if ($edad >= 45 && $asp==1) {
        $bono = $sueldo + ($sueldo/100*2) + (40*3);
    // Sexo
    }else if($sexo=="Femenino" && $asp==1){
        $bono = $sueldo + ($sueldo/100*3) + (40*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero" && $asp==1) {
        $bono = $sueldo - ($sueldo/100*5) + (40*3);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino" && $asp==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) + (40*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero" && $asp==1){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5) + (40*3);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero" && $asp==1){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5) + (40*3);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero" && $asp==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5) + (40*3);
    
    // --> Porcentajes con Oracle
    // Edad
    }else if ($edad >= 45 && $oracle==1) {
        $bono = $sueldo + ($sueldo/100*2) + (60*3);
    // Sexo
    }else if($sexo=="Femenino" && $oracle==1){
        $bono = $sueldo + ($sueldo/100*3) + (60*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero" && $oracle==1) {
        $bono = $sueldo - ($sueldo/100*5) + (60*3);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino" && $oracle==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) + (60*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero" && $oracle==1){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5) + (60*3);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero" && $oracle==1){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5) + (60*3);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero" && $oracle==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5) + (60*3);
    
    // --> Porcentajes con VB.Net
    // Edad
    }else if ($edad >= 45 && $vb==1) {
        $bono = $sueldo + ($sueldo/100*2) + (55*3);
    // Sexo
    }else if($sexo=="Femenino" && $vb==1){
        $bono = $sueldo + ($sueldo/100*3) + (55*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero" && $vb==1) {
        $bono = $sueldo - ($sueldo/100*5) + (55*3);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino" && $vb==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) + (55*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero" && $vb==1){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5) + (55*3);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero" && $vb==1){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5) + (55*3);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero" && $vb==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5) + (55*3);
    
    // Porcentajes con Bases de Datos
    // Edad
    }else if ($edad >= 45 && $bd==1) {
        $bono = $sueldo + ($sueldo/100*2) + (15*3);
    // Sexo
    }else if($sexo=="Femenino" && $bd==1){
        $bono = $sueldo + ($sueldo/100*3) + (15*3);
    // Nacionalidad
    }else if ($nacionalidad=="Extranjero" && $bd==1) {
        $bono = $sueldo - ($sueldo/100*5) + (15*3);
    // Edad y sexo
    }else if($edad >= 45 && $sexo=="Femenino" && $bd==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) + (15*3);
    // Edad y Nacionalidad
    }else if($edad >= 45 && $nacionalidad=="Extranjero" && $bd==1){
        $bono = $sueldo + ($sueldo/100*2) - ($sueldo/100*5) + (15*3);
    // Sexo y nacionalidad
    }else if($sexo=="Femenino" && $nacionalidad=="Extranjero" && $bd==1){
        $bono = $sueldo + ($sueldo/100*3) - ($sueldo/100*5) + (15*3);
    // Edad, sexo y nacionalidad
    }else if($edad >= 45 && $sexo=="Femenino" && $nacionalidad=="Extranjero" && $bd==1){
        $bono = $sueldo + ($sueldo/100*2) + ($sueldo/100*3) - ($sueldo/100*5) + (15*3);
    }else{
        $bono = 0;
    }

    $datos = array($sueldo,$edad,$sexo,$nacionalidad,$antiguedad,$php,$asp,$vb,$java,$oracle,$bd,$bono);
	$objeto = new Metodos();

	if($objeto->insertarDatos($datos)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al agregar";
	}
?>