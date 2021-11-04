<?php

function segmint(&name, ...$args)
{
	$arguments = array();
	
	foreach ($args as &argument)
	{
		array_push($arguments, $argument);
	}
	
	try 
	{
		include("/" + $name)
	} catch()
	{
		echo("Segmint not found! Check the name is spelled correctly and that the module file is in the proper location.")
	}
}

?>
