<?php


include_once "Connection.php";
class Crud extends Connection
{
    private $conn;

    public function executarQuery($query){
        /*Implementar a utilziação
        -> prepare
        -> bindparam/bindvalue*/
        $this->conn = parent::connect();
        $validador = explode(" ", strtoupper($query));
        if ($validador[0] == 'SELECT'){
            $stmt = $this->conn->query($query);
            $stmt->execute();
            $retorno = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $retorno;
        }else{
            $stmt= $this->conn->prepare($query);
            $retorno = $stmt->execute();
            $retorno = [
                "retorno" => (bool)$stmt->rowCount()
            ];  
            return json_encode($retorno);
        }
    }
    public function insert($tabela, $dados){
        $colunas = implode(",",array_keys($dados));
        $valores = "'".implode("','",array_values($dados))."'";
        $sql = "INSERT INTO $tabela ($colunas) VALUES ($valores)";
        $this->executarQuery($sql);
    }

    public function delete($tabela, $condicoes){
        $sql = "DELETE FROM $tabela where ";
        $params = "";

        foreach($condicoes as $coluna => $valor){
            $params .= "$coluna = '$valor' AND ";
        }
        $params = rtrim($params, ' AND ');
        $sql .= $params;
        
        return $this->executarQuery($sql);
    }

    public function update($tabela, $dados, $condicoes){
        $sql = "UPDATE $tabela SET ";
        $values = "";
        foreach($dados as $coluna => $valor){
            $values.= "$coluna = '$valor',";
        }
        $values = rtrim($values,",");

        $params = "";
        foreach($condicoes as $coluna => $valor){
            $params .= "$coluna = '$valor' AND ";
        }
        $params = rtrim($params, ' AND ');

        $sql .= "$values WHERE $params";
        return $this->executarQuery($sql);
    }

    public function select($tabela, $condicoes){
        $sql = "SELECT * FROM $tabela";
        $param = "";
        foreach($condicoes as $coluna => $valor){
            $param .= "$coluna = '$valor' AND ";
        }
        $param = rtrim($param, " AND ");
        $sql .= " WHERE ".$param;

        return $this->executarQuery($sql);
    }
}