<?php

class batch1 extends controller{

    public function __construct()
    {
        //$this->mvc();
    }

    public function mvc()
    {
     
        $data['details']=[
            [
                "name"=>"Shankar",
                "class"=>2
            ],
            [
                "name"=>"Shankar",
                "class"=>2
            ],
           
        ];
        // $data['title']="Home page";
          //  $data="name";
        $this->view('home',$data,true);
    //    $model= $this->loadModel('User');
    //    $result=$model->table('users')->select('name')->getall();
       
    //    print_r($result);
    }
}

