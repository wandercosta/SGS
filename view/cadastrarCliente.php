<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("topo.php") ?>

    
  
    <div class="">
      <label for="nome">CADASTRO CLIENTES</label>
     
    </div>

<div class="container2">  
  <form  action="../controller/cadastrarCliente.php" id="form" name="form" method="post" tabindex="1">  

     <input type="" class="form-contact-input" name="cl_nome" placeholder="Nome" required />  
     <input type="" class="form-contact-input" name="cl_cpf" placeholder="CPF"  /> 
     
     <div class="container2" style="display: flex;">  
     <input type="" class="form-contact-input" name="cl_telefone_01" placeholder="telefone 1" />  
     <input type="" class="form-contact-input" name="cl_telefone_02" placeholder="telefone 2" />  
     </div>
     <input type="" class="form-contact-input" name="cl_endereco" placeholder="Endereco" />  
     <div class="container2" style="display: flex;"> 
     <input type="" class="form-contact-input" name="cl_cidade" placeholder="Cidade" /> 
     <input type="" class="form-contact-input" name="cl_uf" placeholder="UF" /> 
     </div>
     <div class="container2" style="display: flex;"> 
     <input type="" class="form-contact-input" name="cl_cep" placeholder="Cep" /> 
     </div>
     <textarea class="form-contact-textarea" name="cl_obs" placeholder="Obs." ></textarea>  
     <div class="container2" style="display: flex;"> 
     <button type="submit"   id="action" name="action" value="cadastrarCliente"class="form-contact-button">Salvar</button>  

     </div>

  </form>  
</div> 


</body>

</html>