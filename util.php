<?php

function segmint($name, ...$args)
{
	$arguments = array();
	
	foreach ($args as $argument)
	{
		array_push($arguments, $argument);
	}
	
	try 
	{
		$pathToFile = "segmints/" . $name . ".php";
		include($pathToFile);
	} catch(Exception $e)
	{
		echo("Segmint not found! Check the name is spelled correctly and that the module file is in the proper location.");
	}
}

?>
