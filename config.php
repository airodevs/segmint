<?php


return $config = array(

    // DATABASE CONFIG

    "db_name" => "",
    "db_user" => "",
    "db_pass" => "",
    "db_host" => "",

    "sitename" => "",
    "lang" => "en",

    "installed" => false;
);

function getLang()
{
    if ($config["lang"] == "en")
    {
        return $lang_en;
    } elseif ($config["lang"] == "de")
    {
        return $lang_de;
    } elseif ($config["lang"] == "cy")
    {
        return $lang_cy;
    }
}

$lang_en = array(
    "login" => "Log in",
);

$lang_de = array(
    "" => ,
);

$lang_cy = array(
    "" => ,
);

?>