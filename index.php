<?php
	require("classes/wrapper.class.php");

	$w = new Wrapper();

	echo "<h1> Ejemplo 1 </h1>";
	$w->ejem1("â€¢ Uno Dos Tres");

	echo "<h1> Ejemplo 2 </h1>";
	$w->ejem2("Uno Dos Tres");

	echo "<h1> Ejemplo 3 </h1>";
	$w->ejem3("Texto textito textote", "Uno Dos Tres");

	echo "<h1> Ejemplo 4 </h1>";
	$w->ejem4("Uno Dos Tres", "Texto textito textote");

?>