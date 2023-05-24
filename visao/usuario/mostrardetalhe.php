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
    <!-- Programador -->
    <title>Controle de Usuários</title>    
    <script src="js/script.js"></script>        
  </head> 
  <body>
    <?php 
      session_start(); 
    ?>
    <div class="container">
      <br><br>
      <?php
        require_once '../../entidades/Usuario.php' ;
        $item = unserialize($_SESSION['usuario']);
        //session_destroy();
      ?>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>CPF</th>
          <th>Data de Nascimento</th>
          <th>Telefone</th>
          <th>Endereço</th>
          <th>Nível Condutor(a)</th>
          <th>Nível Conduzido(a)</th>
          <th>Tipo</th>
          <th>Foto</th>
          <th>Ativo</th>          
        </tr>
        <tr>             
          <td><?php echo $item->getId() ?></td>
          <td><?php echo $item->getNome() ?></td>
          <td><?php echo $item->getEmail() ?></td>          
          <td><?php echo $item->getCpf() ?></td>
          <td><?php echo $item->getDataNascimento() ?></td>
          <td><?php echo $item->getTelefone() ?></td>
          <td><?php echo $item->getEndereco() ?></td>     
          <td><?php echo $item->getNivelCondutor() ?></td>                                   
          <td><?php echo $item->getNivelConduzido() ?></td>
          <td><?php echo $item->getTipo() ?></td>         
          <td><?php echo $item->getFoto() ?></td>  
          <td><?php echo ($item->getEstaAtivo() == '0') ? 'Não': 'Sim'; ?></td>          
        </tr>
      </table>
      <a class="btn btn-outline-primary" href="index.php">Voltar</a>
    </div>
  </body>
</html>