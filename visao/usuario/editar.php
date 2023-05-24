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
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Programador-->
    <title>Edição de Usuários</title>    
    <script src="js/script.js"></script>        
  </head> 
  <body>
    <?php session_start(); ?>
    <div class="container">
      <?php
        require_once '../../entidades/Usuario.php' ;
        $item = new Usuario();
        if (isset($_SESSION["operacao"]) && $_SESSION["operacao"] == "atualizacao_usuario") {
          $item = unserialize($_SESSION['usuario']);
          //session_destroy();
        }
      ?>
      <form
      enctype="multipart/form-data"
      action="../../controlador/rotasUsuario.php"
      method="post">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" id="id" value="<?php echo $item->getId() ?>">
				<h1>Edição de Usuários</h1>
				<br>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" 
            class="form-control" 
            id="nome" 
            name="nome" 
            value="<?php echo $item->getNome() ?>"
            Required>
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email" 
            value="<?php echo $item->getEmail() ?>"
            Required>
        </div>    
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" 
            class="form-control" 
            id="cpf" 
            name="cpf" 
            value="<?php echo $item->getCpf() ?>">
        </div>  
        <div class="form-group">
          <label for="data_nascimento">Data de Nascimento</label>
          <input type="text" 
            class="form-control" 
            id="data_nascimento" 
            name="data_nascimento" 
            value="<?php echo $item->getDataNascimento() ?>">
        </div>  
        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" 
            class="form-control" 
            id="telefone" 
            name="telefone" 
            value="<?php echo $item->getTelefone() ?>">
        </div>  
        <div class="form-group">
          <label for="endereco">Endereço</label>
          <textarea 
            class="form-control" 
            id="endereco" 
            rows="3" 
            name="endereco">
            <?php echo $item->getEndereco() ?>
          </textarea>
        </div>                                   
        <div class="form-group">
          <label for="condutor">Nível Condutor(a)</label>
          <select class="form-control" id="condutor" name="condutor">
            <option value="" <?php echo ($item->getNivelCondutor() == '') ? 'selected':''; ?>></option>
            <option value="EstakaZero" <?php echo ($item->getNivelCondutor() == 'EstakaZero') ? 'selected':''; ?>>EstakaZero</option>
            <option value="FalaMansa" <?php echo ($item->getNivelCondutor() == 'FalaMansa') ? 'selected':''; ?>>FalaMansa</option>
            <option value="Bicho de Pé" <?php echo ($item->getNivelCondutor() == 'Bicho de Pé') ? 'selected':''; ?>>Bicho de Pé</option>
            <option value="Virgulino" <?php echo ($item->getNivelCondutor() == 'Virgulino') ? 'selected':''; ?>>Virgulino</option>
            <option value="Dominguinhos" <?php echo ($item->getNivelCondutor() == 'Dominguinhos') ? 'selected':''; ?>>Dominguinhos</option>
            <option value="Luiz Gonzaga" <?php echo ($item->getNivelCondutor() == 'Luiz Gonzaga') ? 'selected':''; ?>>Luiz Gonzaga</option>    
          </select>
        </div>
        <div class="form-group">
          <label for="conduzido">Nível Conduzida(o)</label>
          <select class="form-control" id="conduzido" name="conduzido">
          <option value="" <?php echo ($item->getNivelConduzido() == '') ? 'selected':''; ?>></option>
            <option value="EstakaZero" <?php echo ($item->getNivelConduzido() == 'EstakaZero') ? 'selected':''; ?>>EstakaZero</option>
            <option value="FalaMansa" <?php echo ($item->getNivelConduzido() == 'FalaMansa') ? 'selected':''; ?>>FalaMansa</option>
            <option value="Bicho de Pé" <?php echo ($item->getNivelConduzido() == 'Bicho de Pé') ? 'selected':''; ?>>Bicho de Pé</option>
            <option value="Virgulino" <?php echo ($item->getNivelConduzido() == 'Virgulino') ? 'selected':''; ?>>Virgulino</option>
            <option value="Dominguinhos" <?php echo ($item->getNivelConduzido() == 'Dominguinhos') ? 'selected':''; ?>>Dominguinhos</option>
            <option value="Luiz Gonzaga" <?php echo ($item->getNivelConduzido() == 'Luiz Gonzaga') ? 'selected':''; ?>>Luiz Gonzaga</option>    
          </select>
        </div>  
        <div class="form-group">
          <label for="tipo">Tipo</label>
          <select class="form-control" id="tipo" name="tipo">
            <option value="Aluno" <?php echo ($item->getTipo() == 'Aluno') ? 'selected':''; ?>>Aluno</option>
            <option value="Instrutor" <?php echo ($item->getTipo() == 'Instrutor') ? 'selected':''; ?>>Instrutor</option>
            <option value="Professor" <?php echo ($item->getTipo() == 'Professor') ? 'selected':''; ?>>Professor</option>
            <option value="Admin" <?php echo ($item->getTipo() == 'Admin') ? 'selected':''; ?>>Admin</option>
          </select>
        </div>                 
        <div class="form-group">
          <label for="foto">Foto</label>
          <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $item->getFoto() ?>">
        </div>
        <div class="form-group">
          <label for="esta_ativo">Ativo</label>
          <select class="form-control" id="esta_ativo" name="esta_ativo">
            <option value="0" <?php echo ($item->getEstaAtivo() == '0') ? 'selected':''; ?>>Não</option>
            <option value="1" <?php echo ($item->getEstaAtivo() == '1') ? 'selected':''; ?>>Sim</option>
          </select>
        </div>        
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $item->getEmail() ?>">
        </div> 
        <div class="form-group">
          <label for="confirma_senha">Confirma a senha:</label>
          <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" value="<?php echo $item->getEmail() ?>">
        </div>                 
        <br />
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>
      </form>
    </div>
  </body>
</html>