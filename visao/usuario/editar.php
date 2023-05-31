<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <!-- JQuery JS -->  
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>             
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Programador-->
    <title>Edição de Usuários</title>    
    <script src="js/script.js"></script>        
  </head> 
  <body>
    <?php        
      session_start();
      require_once '../../entidades/Usuario.php' ;
      $login = unserialize($_SESSION['login']);
      if($login) {   
        if ($login->getTipo() === "Admin")  { //posso mostrar a página
    
          $item = new Usuario();
          //atualizar o usuario
          $update = isset($_SESSION["operacao"]) && $_SESSION["operacao"] === "atualizacao_usuario";
          if ($update) {   
            $item = unserialize($_SESSION['usuario']);
            unset($_SESSION["operacao"]);
            //session_destroy();
          }   
    ?>
    <div class="container">
      <form
      enctype="multipart/form-data"
      action="../../controlador/rotasUsuario.php"
      method="post">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" id="id" value="<?= $item->getId(); ?>">
				<h1>Edição de Usuários</h1>
				<br>
        <div class="form-group">
          <label for="nome" class="text-danger">*Nome:</label>
          <input type="text" 
            class="form-control" 
            id="nome" 
            name="nome" 
            value="<?= $item->getNome(); ?>"
            Required>
        </div>
        <div class="form-group">
          <label for="email" class="text-danger">*E-mail:</label>
          <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email" 
            value="<?= $item->getEmail(); ?>"
            Required>
        </div>    
        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" 
            class="form-control" 
            id="cpf" 
            name="cpf" 
            value="<?= $item->getCpf(); ?>">
        </div>  
        <div class="form-group">
          <label for="data_nascimento">Data de Nascimento:</label>
          <input type="text" 
            class="form-control" 
            id="data_nascimento" 
            name="data_nascimento" 
            value="<?= $item->getDataNascimento(); ?>">
        </div>  
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="text" 
            class="form-control" 
            id="telefone" 
            name="telefone" 
            value="<?= $item->getTelefone(); ?>">
        </div>  
        <div class="form-group">
          <label for="endereco">Endereço:</label>
          <textarea 
            class="form-control" 
            id="endereco" 
            rows="3" 
            name="endereco">
            <?= $item->getEndereco(); ?>
          </textarea>
        </div>                                   
        <div class="form-group">
          <label for="condutor">Nível Condutor(a):</label>
          <select class="form-control" id="condutor" name="condutor">
            <option value="" <?= ($item->getNivelCondutor() == '') ? 'selected':''; ?>></option>
            <option value="EstakaZero" <?= ($item->getNivelCondutor() == 'EstakaZero') ? 'selected':''; ?>>EstakaZero</option>
            <option value="FalaMansa" <?= ($item->getNivelCondutor() == 'FalaMansa') ? 'selected':''; ?>>FalaMansa</option>
            <option value="Bicho de Pé" <?= ($item->getNivelCondutor() == 'Bicho de Pé') ? 'selected':''; ?>>Bicho de Pé</option>
            <option value="Virgulino" <?= ($item->getNivelCondutor() == 'Virgulino') ? 'selected':''; ?>>Virgulino</option>
            <option value="Dominguinhos" <?= ($item->getNivelCondutor() == 'Dominguinhos') ? 'selected':''; ?>>Dominguinhos</option>
            <option value="Luiz Gonzaga" <?= ($item->getNivelCondutor() == 'Luiz Gonzaga') ? 'selected':''; ?>>Luiz Gonzaga</option>    
          </select>
        </div>
        <div class="form-group">
          <label for="conduzido">Nível Conduzida(o):</label>
          <select class="form-control" id="conduzido" name="conduzido">
          <option value="" <?= ($item->getNivelConduzido() == '') ? 'selected':''; ?>></option>
            <option value="EstakaZero" <?= ($item->getNivelConduzido() == 'EstakaZero') ? 'selected':''; ?>>EstakaZero</option>
            <option value="FalaMansa" <?= ($item->getNivelConduzido() == 'FalaMansa') ? 'selected':''; ?>>FalaMansa</option>
            <option value="Bicho de Pé" <?= ($item->getNivelConduzido() == 'Bicho de Pé') ? 'selected':''; ?>>Bicho de Pé</option>
            <option value="Virgulino" <?= ($item->getNivelConduzido() == 'Virgulino') ? 'selected':''; ?>>Virgulino</option>
            <option value="Dominguinhos" <?= ($item->getNivelConduzido() == 'Dominguinhos') ? 'selected':''; ?>>Dominguinhos</option>
            <option value="Luiz Gonzaga" <?= ($item->getNivelConduzido() == 'Luiz Gonzaga') ? 'selected':''; ?>>Luiz Gonzaga</option>    
          </select>
        </div>  
        <div class="form-group">
          <label for="tipo" class="text-danger">*Tipo:</label>
          <select class="form-control" id="tipo" name="tipo">
            <option value="Aluno" <?= ($item->getTipo() == 'Aluno') ? 'selected':''; ?>>Aluno</option>
            <option value="Instrutor" <?= ($item->getTipo() == 'Instrutor') ? 'selected':''; ?>>Instrutor</option>
            <option value="Professor" <?= ($item->getTipo() == 'Professor') ? 'selected':''; ?>>Professor</option>
            <option value="Admin" <?= ($item->getTipo() == 'Admin') ? 'selected':''; ?>>Admin</option>
          </select>
        </div>                 
        <div class="form-group">
          <label for="foto">Foto:</label>
          <input type="file" class="form-control" id="foto" name="foto" value="<?= $item->getFoto(); ?>">
        </div>
        <div class="form-group">
          <label for="esta_ativo" class="text-danger">*Ativo:</label>
          <select class="form-control" id="esta_ativo" name="esta_ativo">
            <option value="0" <?= ($item->getEstaAtivo() == '0') ? 'selected':''; ?>>Não</option>
            <option value="1" <?= ($item->getEstaAtivo() == '1') ? 'selected':''; ?>>Sim</option>
          </select>
        </div>    
        <?php
          if (!$update) { 
        ?>
        <div class="form-group">
          <label for="senha" class="text-danger">*Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" value="<?= $item->getEmail(); ?>">
        </div> 
        <div class="form-group">
          <label for="confirma_senha" class="text-danger">*Confirma a senha:</label>
          <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" value="<?= $item->getEmail(); ?>">
        </div>   
        <?php
          }
        ?>              
        <br />
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-danger" href="mostrartodos.php">Cancelar</a>
      </form>
    </div>
    <?php    
        } else { //usuario não autorizado
          header("Location: ../proibido.php");
        }
      
      } else { //redireciona pra tela de login
        header("Location: ../index.php");
      }
    ?>
  </body>
</html>