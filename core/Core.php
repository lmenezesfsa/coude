<?php

Class Core{

    public function __construct(){
        $this->run();
    }
    public function run(){
        
        session_start();

        $params = [];
        if(isset($_GET['link']))
        {
            $url = $_GET['link'];
        }

        if(!empty($url))
        {   
            $url = explode('/', $url);
            $controller = $url[0].'Controller';
            
            array_shift($url); // irá remover a posiçaõ 0 do array
    
            if(isset($url[0]) && !empty($url[0])){
                $method = $url[0];
                array_shift($url);
            }else{
                $method = 'index';
            }
            
            if(count($url) > 0){
                $params = $url;
            }
        } else{
            $controller = 'HomeController';
            $method = 'index';
        }
            
        $caminho = "coude/controllers/".ucfirst($controller).'.php';
        if(!file_exists($caminho) && !method_exists($controller, $method)){
            $controller = 'ErroController';
            $method = 'index';
        }


        
        $obj = new $controller;
        call_user_func_array(array($obj, $method), $params);

        }
        
    }
