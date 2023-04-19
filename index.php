<?php
$files = glob("helper/*.php");

 array_map(fn($filname)=>include "$filname",$files);
require_once "app/libs/Session.php";

spl_autoload_register(function ($clsname) {
    if (file_exists("app/libs/$clsname.php"))
        require_once "app/libs/$clsname.php";
});
$obj = new Autoload();
