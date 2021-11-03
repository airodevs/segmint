<?php

include("../resources/parsedown.php");

$parser = new Parsedown();

function Parse($path)
{
    global $parser;
    $text = file_get_contents($path);
    $parser->text($text);
}

?>