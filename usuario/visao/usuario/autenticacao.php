<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Programador -->
        <title>Autenticação</title>    
    </head>
    <body class="p-3 m-0 border-1 bd-example">
        <div class="dropdown-menu">
        <form id="form" 
          method="post" 
          action="../../controlador/rotasUsuario.php"
          class="px-4 py-3">
              <input type="hidden" name="acao" id="acao">

              <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input 
                  type="email" 
                  class="form-control" 
                  id="email" 
                  name="email"
                  placeholder="email@exemplo.com"
                  required>
              </div>
              <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input 
                  type="password" 
                  class="form-control"
                  id="senha" 
                  name="senha"
                  placeholder="Senha"
                  required>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" 
                  class="form-check-input" 
                  id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck">
                    Lembrar-me
                  </label>
                </div>
              </div>
                <button 
                  type="submit" 
                  class="btn btn-primary"
                  onclick="autenticar()">
                    Entrar
                </button>
            </form>
            <div class="dropdown-divider"></div>
            <!--<a class="dropdown-item" href="../../controlador/recupera_senha.php">Esqueceu a senha?</a>-->
          </div>
    </body>
</html>                