<?php
/**
* Testeo el resultado del test de Divisibilidad de Linio.
**/
include_once("TestLinio.php");
class UnitTesLinio
{
	/**
	* Clase para validar test de Linio.
	**/
	function validate()
	{
		$testLinio = new TestLinio();
		$testLinio->run();
	}
}

$unit = new UnitTesLinio();
$unit->validate();
