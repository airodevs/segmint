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

$lang = getLang();

$lang_en = array(
    "login" => "Log in",

    "seg_error" => "Segmint not found! Check the name is spelled correctly and that the module file is in the correct location.",
);

$lang_de = array(
    "" => ,
);

$lang_cy = array(
    "" => ,
);

?>