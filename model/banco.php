<?php

// CONEXAO

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    public function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

// USUARIO

    public function pesquisarUsuario($login){
        $result = $this->mysqli->query("SELECT * FROM usuarios WHERE login='$login'");
        return $result->fetch_array(MYSQLI_ASSOC);
        
  
    }


    public function setUsuario($nome,$email,$senha){
        
        $stmt = $this->mysqli->prepare("INSERT INTO usuarios (`nome`, `email`, `senha`) VALUES (?,?,?)");
       
        
        $stmt->bind_param("sss",$nome,$email,$senha);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }


// CLIENTES  

    public function setCliente($cl_nome,$cl_cpf,$cl_telefone_01,$cl_telefone_02,$cl_endereco,$cl_cidade,$cl_uf,$cl_cep,$cl_obs){
     
        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`cl_nome`, `cl_cpf`, `cl_telefone_01`, `cl_telefone_02`, `cl_endereco`,`cl_cidade`,`cl_uf`,`cl_cep`,`cl_obs`) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss",$cl_nome,$cl_cpf,$cl_telefone_01,$cl_telefone_02,$cl_endereco,$cl_cidade,$cl_uf,$cl_cep,$cl_obs);
        if($stmt->execute() == TRUE){   
            return true ;
        }else{

            echo $stmt->execute() ;
            var_dump($stmt);
            exit;
            return false;
        }
    
    }

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM clientes");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }


    public function delCliente($id){
        if($this->mysqli->query("DELETE FROM `clientes` WHERE `cl_id` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }















    public function setLivro($nome,$autor,$quantidade,$preco,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO livros (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$autor,$quantidade,$preco,$data);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getLivro(){
        $result = $this->mysqli->query("SELECT * FROM livros");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteLivro($id){
        if($this->mysqli->query("DELETE FROM `livros` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaLivro($id){
        $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateLivro($nome,$autor,$quantidade,$preco,$flag,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$nome,$autor,$quantidade,$preco,$flag,$data,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
