<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Viagens 10</title>
</head>
    <style>
        .form-container {
          display: flex;
          flex-direction: column;
          align-items: center;
          text-align: center;
        }
    
        .botao-cadastrar {
          margin-top: 20px;
        }
       
      .container-admin-banner2 {
        text-align: center;
        margin-top: 8px; /* Defina a margem superior corretamente */
        color:white;
      }
    </style>
    </head>
    
    <body>
      <main>
        <section class="container-admin-banner">
          <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
          <h1>Login Viagens</h1>
        </section>
        <!--<section class="container-form">-->
        <div class="form-container">
          <form method="post" action="processar-login.php">
    
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>
    
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" required>
    
            <input type="submit" class="botao-cadastrar" name="entrar" value="Entrar" />
            <?php if (isset($_GET["erro"])){ ?>
              <label for="senha">Usuário ou senha inválidos</label>
            <?php }?>
          </form>
        </div>
        <div class="form-container">
          <form action="cadastrar-usuario.php" method="post">
            <input type="submit" name="cadastro" class="botao-cadastrar" value="Usuário novo" />
    
          </form>
        </div>
    
    
        
      </main>
    </body>
    
    </html>
</body>
</html>