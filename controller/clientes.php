<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCliente();
        foreach ($row as $value){
            echo '<div >';
            echo '<tr >';
            echo "<th>".$value['cl_id'] ."</th>";
            echo "<td>".$value['cl_nome'] ."</td>";
            echo "<td>".$value['cl_cpf'] ."</td>";
            echo "<td>".$value['ativo'] = ($value['flag'] == "0") ? "Desativado":"Ativado" ."</td>";
            echo "<td><a class='btn-pqn btn-warning' href='editar.php?id=".$value['cl_id']."'><span class='fas fa-edit fa-2x icone-aba'></a><a class='btn-pqn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['cl_id']."&action=deletarCliente"."'><span class='fas fa-trash fa-2x icone-aba'></a></td>";
            echo "<th> </th>";
            
            echo "</tr>";
            echo '</div>';
        }
    }
}


