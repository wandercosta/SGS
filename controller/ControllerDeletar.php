<?php
require_once("../model/banco.php");
class deleta {
    private $deleta;

    public function __construct($id){

    if($_GET["action"]== "deletarCliente"){
        $this->deleta = new Banco();
        if($this->deleta->delCliente($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/clientes.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
    else{
        echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
    }


}
}

new deleta($_GET['id']);
?>
