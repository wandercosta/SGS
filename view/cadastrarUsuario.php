<!DOCTYPE html>
<html lang="pt-br">
    
<?php include("view/head.php"); ?>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">welcome back!</h2>
                <p class="description description-primary">To keep connected with us</p>
                <p class="description description-primary">please login with your personal info</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
          
                <p class="description description-second">or use your email for registration:</p>
                <form method="post" action="controller/cadastrarCliente.php" id="formUs" name="formUs"  onsubmit="validar(document.form); return false;" class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input id="nome" name="nome" type="text" placeholder="Nome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="email" name="email" type="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="senha" name="senha" type="password" placeholder="Senha">
                    </label>
                    
                    <button type="submit" class="btn btn-second"  id="action" name="action" value="cadastrarUsuario" >Cadastrar</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
      
    </div>
    <script src="js/app.js"></script>
</body>
</html>