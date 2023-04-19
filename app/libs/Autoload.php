<?php
class Autoload
{
    function __construct()
    {
        Session::init();
        $reqobj = request();
        $controller = $reqobj->controller;
        $method = $reqobj->method;
        $para = $reqobj->para;
        if (file_exists("app/controllers/$controller.php")) {
            include "app/controllers/$controller.php";
            $cobj = new $controller();
            if (method_exists($cobj, $method))
                $cobj->$method($para);
            else
                $cobj->{$reqobj->dmethod}();
        } else {
            include "404.php";
        }
    }
}
