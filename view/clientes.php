<?php require_once("../controller/clientes.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>
<style>
/* Sortable tables */
table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}
 
</style>
<script src="../js/sorttable.js"></script>

<body>
   <?php include("topo.php"); ?>
    <table class="sortable table table-hover">
        <thead>

            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>Flag</th>
                <th>Opções</th>
                <th><a  href="cadastrarCliente.php" role="button"><i class="fas fa-user-plus"></a></i></th>
            </tr>
            <tr>
                <th><input type="cl_id" class="form-control" id="cl_id" placeholder=""></th>
                <th><input type="cl_nome" class="form-control" id="cl_nome" placeholder=""></th>
                <th><input type="cl_cpf" class="form-control" id="cl_cpf" placeholder=""></th>
                <th><input type="cl_ativo" class="form-control" id="cl_ativo" placeholder=""></th>
                <th><button class="btn-psq btn-outline-secondary"><i class="fas fa-search"></i></button></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            <?php new listarController();  ?>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
