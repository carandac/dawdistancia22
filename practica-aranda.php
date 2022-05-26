<?php
/**
*  @author Carlos Aranda Calatayud
*  @version 1.0
*/

/**
* Función suma de dos números
* @param int $num1
* @param int $num2
* @return float
* {@internal Esto es solo para los desarrolladores}
*/
  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

   }

/**
* Función saludar con paso de parámetro o argumento nombre
* @param string $nombre
* @return string
* {@internal Esto es solo para los desarrolladores}
*/
  function saludar($nombre){
     return "Hola " . $nombre;
  }

echo (saludar('Fernando'));

$suma = suma (24,42);
echo $suma;

?>