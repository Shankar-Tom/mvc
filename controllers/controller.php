<?php

class controller{

    public function loadModel($modelname)
    {
        include_once('models/DB.php');
        include_once('models/'.$modelname.'.php');
        return new $modelname;
    }

    public function view($viewfile,$data=null,$extract=false)
    {
        if($extract && is_array($data))
        {
            extract($data);
        }
        include_once('views/'.$viewfile.'.php');
    }
}