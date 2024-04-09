<?php
class HomeController extends Controller
{
    public function index(){
        $obj = new LinksModel();
        $dados = $obj->getLink('');
        $this->carregarTemplate('home', $dados);
    }

    public function cadastrarLink(){
        if (isset($_POST)){
            $link = $_POST['link'];
            $alias = $_POST['alias'];

            $dados = [
                'alias' => $alias,
                'link' => $link
            ];

            $obj = new LinksModel();
            $obj->insertLink($dados);
        }
        header('location: http://localhost/coude');
    }
    public function deletarLink(){
        $dados = ["id" => filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS)];
        $obj = new LinksModel();
        $obj ->deleteLink($dados);
        header('location: http://localhost/coude');
    }
}