<?php

/**
* Clase que hace las verificaciones matematicas.
**/
class Verificator
{
	/**
	* Verifica la divisibilidad de un numero.
	* @var int number, valor de dividir.
	* @var int divisorA, valor a verificar a divisibilidad.
	* @var int ret, variable de retorno en caso de ciumplir
	*				la condicion.
	* @return devuelve el valor de retorno si es divisible, o el mismo nimero.
	***/
	public static function verifyDivisibilityTwoNumbers( $number , $divisorA , $ret )
	{
		// Seteo el valor default a devolver.
		$valReturn = $number;
		// Verifico la divisibilidad y asigno el valor.
		if ( is_integer( $number ) 
			&& ( ($number % $divisorA) == 0 ) )
			$valReturn = $ret;
		// Devuelvo el resultado.
		return $valReturn;
	}
}
?>