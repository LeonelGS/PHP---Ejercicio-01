<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabajo Practico N° 1</title> 
  </head>    
 <?php
   $number1 = $_GET ["numero1"];
   $number2 = $_GET ["numero2"];
   $number3 = $_GET ["numero3"];
   $number4 = $_GET ["numero4"];
   $number5 = $_GET ["numero5"];
   $promedio = ($number1+$number2+$number3+$number4+$number5)/5;
   echo "<b>Resolucion de Ejercicio N 09</b><br>";
   echo "<br>";
   echo " El promedio del total de numeros ingresados es: $promedio";
 ?>
<html>