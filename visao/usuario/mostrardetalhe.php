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
      <br>      
      <a class="btn btn-outline-primary" href="mostrartodos.php">Voltar</a>
      <br><br>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Id</th>
        </tr>
        <tr>             
          <td><?php echo $item->getId() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Nome</th>
        </tr>
        <tr>             
          <td><?php echo $item->getNome() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Email</th>
        </tr>
        <tr>             
          <td><?php echo $item->getEmail() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>CPF</th>
        </tr>
        <tr>             
          <td><?php echo $item->getCpf() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Data de Nascimento</th>
        </tr>
        <tr>             
          <td><?php echo $item->getDataNascimento() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Telefone</th>
        </tr>
        <tr>             
          <td><?php echo $item->getTelefone() ?></td>
        </tr>          
      </table>
            <table class='table table-striped table-bordered'>
        <tr>
          <th>Endereço</th>
        </tr>
        <tr>             
          <td><?php echo $item->getEndereco() ?></td>
        </tr>          
      </table>
            <table class='table table-striped table-bordered'>
        <tr>
          <th>Nível Condutor(a)</th>
        </tr>
        <tr>             
          <td><?php echo $item->getNivelCondutor() ?></td>
        </tr>          
      </table>
            <table class='table table-striped table-bordered'>
        <tr>
          <th>Nível Conduzido(a)</th>
        </tr>
        <tr>             
          <td><?php echo $item->getNivelConduzido() ?></td>
        </tr>          
      </table>
            <table class='table table-striped table-bordered'>
        <tr>
          <th>Tipo</th>
        </tr>
        <tr>             
          <td><?php echo $item->getTipo() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Foto</th>
        </tr>
        <tr>             
          <td><?php echo $item->getFoto() ?></td>
        </tr>          
      </table>
      <table class='table table-striped table-bordered'>
        <tr>
          <th>Ativo</th>
        </tr>
        <tr>             
          <td><?php echo ($item->getEstaAtivo() == '0') ? 'Não': 'Sim'; ?></td>
        </tr>          
      </table>      
    </div>
  </body>
</html>