<!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css"> -->
<link rel="stylesheet" href="/css/main.css">
<?php

include("config.php");

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
		echo($lang["seg_error"]);
	}
}

?>
