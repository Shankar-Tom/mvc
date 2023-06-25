<?php

include_once('controllers/controller.php');
$path=explode('/',$_SERVER['REQUEST_URI']);


if(file_exists('controllers/'.$path[1].'.php') )
{
    include_once('controllers/'.$path[1].'.php');
   if(class_exists($path[1]))
   {
    $obj= new $path[1];
    if(method_exists($obj,$path[2]))
    {
        // if(isset($path[3]))
        // {
        //     $obj->{$path[2]}($path[3]);
        // }
        $obj->{$path[2]}();
    }else{
        echo 404;
    }
   }
  
   
}else{
    echo 404;
}
//print_r($path);