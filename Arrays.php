//Ejercicio1
<?php
$persona = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

echo "Ejercicio 1<br>";
$dato = 1;
foreach ($persona as $valor) { //con este foreach mostramos el valor de los arrays sin las claves
    echo "dato $dato: $valor<br>";
    $dato++;
}
?>
//Ejercicio2
<?php
$persona = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

echo "<br>Ejercicio 2<br>"; //aqui cambiamos lo de dato por el nombre
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>
//Ejercicio3
<?php
$persona = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

$persona["edad"] = 24;

echo "<br>Ejercicio 3<br>"; //con esto actualiza los datos
$dato = 1;
foreach ($persona as $valor) {
    echo "dato $dato: $valor<br>";
    $dato++;
}
?>
//Ejercicio4
<?php
$persona = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

unset($persona["ciudad"]); 

echo "<br>Ejercicio 4<br>";
var_dump($persona);//con esto muestra como a tal la linea de codigo, en este caso el array persona
?>
//Ejercicio5
<?php
$letras = "a,b,c,d,e,f";
$array = explode(",", $letras);
$array = array_reverse($array);

echo "Ejercicio 5<br>";
for ($i = 0; $i < count($array); $i++) {
    echo "letter " . (count($array) - $i) . "º: " . $array[$i] . "<br>"; //con la funcion count calculamos el indice desde el final y añadimos letter
}
?>
//Ejercicio6
<?php
$notas = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];

echo "Ejercicio 6<br>Notas de los estudiantes: ";
foreach ($notas as $nombre => $nota) { //aqui recorremos el array para ir mostrando cada alumno
    echo "$nombre: $nota "; //aqui simplemente imprimos primero la variable nombre y luego la nota correspondiente
}
?>
//Ejercicio7
<?php
$notas = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];

$media = array_sum($notas) / count($notas);

echo "Ejercicio 7<br>Media de las notas: " . number_format($media, 2) . "<br>"; //con la funcion number format redondeamos a 2 decimales para que no queden tantos decimales 
echo "Alumnos con nota por encima de la media:<br>";

foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre<br>"; //con esto mostramos a todos los alumnos los cuales su $nota este por encima de la media que hemos calculado arriba
    }
}
?>
//Ejercicio8
<?php
$notas = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];

$notaMax = max($notas); //con la funcion max muestra el valor mas alto en el array $notas
$maxAlu = array_search($notaMax, $notas); //con esto muestra el nombre del mejor alumno y su nota

echo "Ejercicio 8<br>La nota más alta es $notaMax y el mejor alumno es $maxAlu.";
?>



