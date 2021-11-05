<?php

// THIS IS THE SEGMINT MARKDOWN MODULE. REQUIRED segmint() ARGUMENTS ARE AS FOLLOWS:
//
// $name >> SET TO "markdown"
// $file >> SET TO TEXT FILE LOCATION WITH MARKDOWN FORMATTED TEXT e.g. "/md/example.txt"
//
// FINISHED COMMAND SHOULD LOOK LIKE:
// segmint("markdown", $file); >> WHERE $file IS PATH TO FILE

include("./resources/parsedown.php");



function Parse($path)
{
    $parser = new Parsedown();
    $text = file_get_contents($path);
    ?>
    <markdown>
        <?php echo($parser->text($text)); ?>
    </markdown>
    <?php
}

Parse($arguments[0]);

?>
