<?php

class ErroController extends Controller
{
    public function index(){
        $this->carregarTemplate('erro404',["nome"=>'Lucas']);
    }
}