<?php
$nombre = $_POST['nombre'];
$laboratorio1=$_POST['laboratorio1'];
$laboratorio2=$_POST['laboratorio2'];
$parcial=$_POST['parcial'];

echo "Nombre: ".$nombre.'<br>'; 
echo "laboratorio1: ".$laboratorio1.'<br>'; 
echo "laboratorio2: ".$laboratorio2.'<br>'; 
echo "Parcial: ".$parcial.'<br>'; 

$promedio = ($laboratorio1 + $laboratorio2 + $parcial)/3;

echo "Promedio: ".number_format($promedio,2).'<br>'; 

$conect = mysqli_connect("localhost", "root", "catolica", "registro_yaque");

if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
$res = mysqli_query($conect,"SELECT max(idAlu)+1 maxid FROM alumno_yaque");
$row = mysqli_fetch_assoc($res);
$id = $row['maxid'];
$query = "INSERT INTO alumno_yaque VALUES ($id,'$nombre', $laboratorio1, $laboratorio2,$parcial)";
mysqli_query($conect, $query);


?>