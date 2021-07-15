<?php
require_once("../model/banco.php");

class entrarController {


    private $login;
    private $senha;

    public function __construct($login){
        
        $this->entrar = new Banco();
        $this->criarFormulario($_POST['login']);
        

    }
    private function criarFormulario($login){
        $row = $this->entrar->pesquisarUsuario($login);
        $this->login         =$row['login'];
        $this->senha        =$row['senha'];

        if($this->senha ==  $_POST['senha'] AND $_POST['senha'] != NULL AND $_POST['login'] AND  $this->login != NULL AND $this->senha != NULL ){
            echo "<script>document.location='../view/menu.php'</script>";
        }else{
            echo "<script>alert('Verifique o Nome de Usuario ou Senha');history.back()</script>";
        }
    }

}
$id = filter_input(INPUT_GET, 'id');
$editar = new entrarController($id);

?>
