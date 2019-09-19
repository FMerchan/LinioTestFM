<?php
/**
* Clase de test de Linio.
**/

include_once("Verificator.php");
class TestLinio
{
	/**
	* Variables del contador
	**/
	var $m_Start = 0;
	var $m_End = 100;

	/**
	* Constructor de la clase.
	* @var int start, valor de inicio de verificacion de la divisibilidad. 
	* @var int end, valor de final del cliclo 
	*				de verificacion de la divisibilidad. 
	**/
	function __construct( $start = "" , $end = "" )
	{
		// Seteo las variables de inicio y fin del contador.
		if( $start != "" )
		{
			$this->m_Start = $start;
		}
		if( $end != "" )
		{
			$this->m_End = $end;
		}
	}

	/**
	* Funcion encargadad de correr el contador.
	**/
	function run()
	{
		// Recorro los valores.
		for( $i = $this->m_Start ; $i <= $this->m_End; $i++ )
		{
			// Calculo el valor segun la divisibilidad.
			$valor = $this->calculateValue( $i );
			// Imprimo el resultado.
			$this->print( $valor );
		}
	}

	/**
	* Funcion encargada de calcular el valor asignado a la divisibilidad.
	* @var int valor, valos a verificar la divisivilidad.
	* @return string, devuelve el valor asinado.
	**/
	function calculateValue( $valor )
	{
		// Creo la variable a devolver.
		$result = $valor ;
		// Verifico si es divisible por 15, que es minimo comun multiploi de 3 y 5.
		$result = Verificator::verifyDivisibilityTwoNumbers( $result,15,'Linianos' );
		// Verifico si es divisible por 5.
		$result = Verificator::verifyDivisibilityTwoNumbers( $result,5,'Linio' );
		// Verifico si es divisible por 3.
		$result = Verificator::verifyDivisibilityTwoNumbers( $result,3,'IT' );
		return $result;
	}

		/**
	* Funcion encargada de imprimir el valor.
	* @var string valor, valor a imprimir.
	**/
	function print( $valor )
	{
		// Escribo los valores.
		echo "$valor".PHP_EOL;
	}

}

?>