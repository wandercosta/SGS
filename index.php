<!DOCTYPE html>
<html lang="pt-br">
    
<?php include("view/head.php"); ?>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">SISTEMA DE GERENCIAMENTO</h2>
  
            </div>    
            <div class="second-column">

                <p class="description description-second">iNFORME SEUS DADOS : </p>
                <form method="post" action="controller/ControllerEntrar.php" id="formUs" name="formUs"  onsubmit="validar(document.form); return false;" class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input id="login" name="login" type="text" placeholder="Login" required>
                    </label>
                    
            
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="senha" name="senha" type="password" placeholder="Senha" required>
                    </label>
                    
                <button type="submit" class="btn btn-second"  id="action" name="action" value="Entrar" >Entrar</button>        
                </form>
            </div>
        </div>
 
    </div>
    <script src="js/app.js"></script>
</body>
</html>