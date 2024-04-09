<?php 

include_once "Crud.php";

Class LinksModel extends Crud{

    public function getLink($dados){
        if ($dados == ''){
            $query = 'SELECT * FROM links';
        }else{
            $query = "SELECT * FROM links WHERE nome ='".$dados['alias']."'";    
        }
        return parent::executarQuery($query);
    }

    public function insertLink($dados){
        $query = "INSERT INTO links (nome, link) values('".$dados['alias']."','".$dados['link']."')";
        parent::executarQuery($query);
    }

    public function deleteLink($dados){
        $query = "DELETE from links where id = ".$dados['id'];
        parent::executarQuery($query);
    }

    public function updateLink($dados){
        $query = '';
        parent::executarQuery($query);
    }


}