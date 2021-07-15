<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getLivro();
        foreach ($row as $value){
            echo '<div >';
            echo '<tr >';
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['autor'] ."</td>";
            echo "<td>".$value['data'] ."</td>";
            echo "<td>".$value['flag'] = ($value['flag'] == "0") ? "Desativado":"Ativado" ."</td>";
            echo "<td><a class='btn-pqn btn-warning' href='editar.php?id=".$value['nome']."'><span class='fas fa-edit fa-2x icone-aba'></a><a class='btn-pqn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'><span class='fas fa-trash fa-2x icone-aba'></a></td>";
            echo "<th> </th>";
            
            echo "</tr>";
            echo '</div>';
        }
    }
}

