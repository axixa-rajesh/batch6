<?php
class Controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }
    public function loadModel($modelname)
    {

        $modelname = ucfirst(strtolower($modelname));
        $path = "app/models/$modelname.php";
        if (file_exists($path)) {
            include $path;
            return new $modelname($modelname);
        }
    }
}
