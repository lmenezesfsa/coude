<?php

Class RedirectController extends Controller{

    public function index(){
        $data = explode('?',$_SERVER['REQUEST_URI']);
        $data = explode('=', $data[1]);
        
        $obj = new LinksModel();
        $retorno = $obj->getLink(['alias' => $data[1]]);
        if ($retorno[0]['link'] == ''){
            header("location: http://localhost/coude/NotFound");
        } else {
            header("location: ".$retorno[0]['link']);
        }
       
    }
}