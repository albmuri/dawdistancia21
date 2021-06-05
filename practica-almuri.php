<?php

/**
 * Probando GITHUB4
 */

/**
 * Devuelve cualquier cosa porque esta función es de pega
 *
 * @author Alberto Manuel Muñoz Rivas
 * @version 1.2
 * @param string $param1 La cadena que queramos
 * @return string $param2 Devolveremos una cadena con un añadido
 * @access private
 * @param string $claveprivada Contraseña que no debe verse
 * @internal Revisar el acceso al servidor
 */
function funcionInventada1($param1)
{

  echo "Hola";
  $param2 = "Hola ".($param1);
  return $param2;
}

/**
 * Esta función devuelve un número mágico multiplicando la edad por 23
 *
 * @author Alberto Manuel Muñoz Rivas
 * @version 1.3
 * @param integer $edad La edad de la persona
 * @return integer $puntos Devolvemos la edad x 23
 * @access private
 * @param boolean $suerte No se ve
*/
function funcionInventada2($edad)
{
  echo "Tu edad es ".$edad;
  $puntos = $edad * 23;
  return $puntos;
}

/**
 * Aquí empezamos a invocar funciones
 * @access public
*/
echo "Tus puntos son :".funcionInventada2(54);
echo "La cadena queda :".funcionInventada1("amigo");

?>
