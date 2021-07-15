<?php
require_once("../model/cliente.php");

class cadastroController{

    private $cadastro;

    public function __construct(){

        $this->cadastro = new cadastroCliente();
        $this->incluirCliente();
    }
    

 

    private function incluirCliente(){
        $this->cadastro->setNome($_POST['cl_nome']);
        $this->cadastro->setCpf($_POST['cl_cpf']);
        $this->cadastro->setTelefone01($_POST['cl_telefone_01']);
        $this->cadastro->setTelefone02($_POST['cl_telefone_02']);
        $this->cadastro->setEndereco($_POST['cl_endereco']);
        $this->cadastro->setCidade($_POST['cl_cidade']);
        $this->cadastro->setUf($_POST['cl_uf']);
        $this->cadastro->setCep($_POST['cl_cep']);
        $this->cadastro->setObs($_POST['cl_obs']);
        // $this->cadastro->setNascimento(date('Y-m-d',strtotime($_POST['cl_nascimento'])));
        $result = $this->cadastro->incluirCliente();
        if($result >= 1){
            echo "<script>alert('Cliente incluído com sucesso!');document.location='../view/clientes.php'</script>";
        }else{
            echo "<script>alert('Foi não');document.location='../view/clientes.php'</script>";
        }
    }


   
}
new cadastroController();












