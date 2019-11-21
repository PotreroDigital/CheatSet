<?php
//ejemplo de bucle for//
//for ($i=0; $i < 60 ; $i++) {
  //echo "el valor de i es $i <br>";
  //echo "siguente afirmación <br>";
//}
//1. Mostrar en pantalla los numeros pares del 0 al 100
//2. Mostrar en pantalla los numeros pares del 0 al 100
//3. Mostrar en pantalla la tabla del 2
//4. Mostrar en pantalla la tabla del 7
//5. Mostrar en pantalla la tabla del 9

/*for ($i=0; $i < 100 ; $i= $i+2) {
  echo "los numeros pares del 0 al 100 son $i <br>" ;
}

echo "<br> <br>";

for ($i=1; $i < 99 ; $i= $i+2) {
  echo "los numeros impares del 1 al 99 son $i <br>" ;
}

  echo "<br> la tabla del 2 <br>";

for ($i=0; $i < 10 ; $i= $i+1) {
  $resultado=$i*2;
  echo "2x$i= $resultado <br>";
}

  echo "<br> tabla del 7 <br>";

for ($i=0; $i < 10 ; $i= $i+1) {
  $resultado=$i*7;
  echo "7x$i= $resultado <br>";
}

  echo "<br> tabla del 9 <br>";

for ($i=0; $i <10 ; $i= $i+1) {
  $resultado=$i*9;
  echo "9x$i= $resultado <br>";
}

//6. Mostrar en la pantalla los numeros del 100 al 1
//7. Definir un array llamando colores que contenga: azul, rojo, verde, negro,
//blanco, luego mostrar en la pantalla de cada uno de los valores de la array.

for ($i=100; $i > 0 ; $i--) {
  echo "los numeros del 100 al 1 son $i <br>";
}

echo "<br> <br>";

$colores= [
  "azul",
  "rojo",
  "verde",
  "negro",
  "blanco",
  "naranja",
  "violeta"
];

echo count($colores). "<br>" ;

  for ($i=0; $i < count($colores) ; $i++) {
  echo "$colores[$i] <br> ";
}
*/

/*$colores=["rojo", "azul", "negro"];
foreach ($colores as $value) {
echo "$value <br>";
}

  echo "<br>";

$datos= [
"Nombre" => "Roberto",
"Apellido" => "Acosta",
"Edad" => 21,
"Domicilio" => "Rocamora"
];

foreach ($datos as $key => $value) {
  echo "$key: $value <br>";
}*/
/*$edad=59;
if ($edad >= 18 and $edad < 60) { //and>verdaderas que se cumplen; or>cuando tiene dos o mas
  echo "Pasa";
} elseif ($edad == 17) {
  echo "Te sale $100 más...";
} else {
  echo "No pasas";
}*/

/*1. Definir un array con 5 nombres y luego;
  a. Mostrar cada uno de los valores con un for
  b. Mostrar cada uno de los valores con un foreach
  2. Definir un array con 15 valores numericos, y luego mostrar la suma de todos
*/
$datos= ["Roberto", "Acosta", "Leonardo", "Marcelo", "Nombre"];
for ($i=0; $i < count($datos) ; $i=$i+1){
  echo "$datos[$i] <br>";
}
echo "<br>";

$info= ["Juan", "Mariana", "Michel", "Azul", "Celeste"];
foreach ($info as $key => $value) {
  echo "$key: $value <br>";
}

echo "<br>";

$numeros= [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
foreach ($numeros as $key => $value) {
  echo "$key: $value <br>";
}


 ?>
