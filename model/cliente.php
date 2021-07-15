<?php
require_once("banco.php");

class cadastroCliente extends Banco{

    
    //Metodos Set
    public function setNome($string){
        $this->cl_nome = $string;
    }
    public function setCpf($string){
        $this->cl_cpf = $string;
    }
    public function setTelefone01($string){
        $this->cl_telefone_01 = $string;
    }
    public function setTelefone02($string){
        $this->cl_telefone_02 = $string;
    }
    public function setEndereco($string){
        $this->cl_endereco = $string;
    }


    public function setCidade($string){
        $this->cl_cidade = $string;
    }

    public function setUf($string){
        $this->cl_uf = $string;
    }

    public function setCep($string){
        $this->cl_cep = $string;
    }

    public function setObs($string){
        $this->cl_obs = $string;
    }



    //Metodos Get
    public function getNome(){
        return $this->cl_nome;
    }
    public function getCpf(){
        return $this->cl_cpf;
    }
    public function getTelefone01(){
        return $this->cl_telefone_01;
    }
    public function getTelefone02(){
        return $this->cl_telefone_02;
    }
    public function getEndereco(){
        return $this->cl_endereco;
    }
 

    public function getCidade(){
        return $this->cl_cidade;
    }

    public function getUf(){
        return $this->cl_uf;
    }

    public function getCep(){
        return $this->cl_cep ;
    }

    public function getObs(){
        return $this->cl_obs ;
    }

    function incluirCliente(){
      
        return $this->setCliente($this->getNome(),$this->getCpf(),$this->getTelefone01(),$this->getTelefone02(),$this->getEndereco(),$this->getCidade(),$this->getUf(),$this->getCep(),$this->getObs());
    }
}



?>
