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
    <title>Controle de Usuários</title>    
    <script src="js/script.js"></script>        
  </head> 
  <body onload="buscarTodos()">
    <?php        
      require_once '../../entidades/Usuario.php' ;
      session_start();
      $user = unserialize($_SESSION['login']);
      if($user) {   
        if ($user->getTipo() === "Admin")  { //posso mostrar a página
    ?>
    <div class="container">
    <br>
    <a class="btn btn-outline-primary" href="editar.php">Novo Usuário</a>
    <br><br>
    <table class='table table-striped table-bordered'>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Ações</th>
      </tr>
      <?php        
        $array = unserialize($_SESSION['array_usuario']);
        // if (!isset($array))
        //   print "<script>buscarTodos()</script>";
        //session_destroy();
        foreach($array as $item) {
      ?>
          <tr>
            <td><?php echo $item->getId(); ?></td>
            <td><?php echo $item->getNome(); ?></td>
            <td><?php echo $item->getTipo(); ?></td>
            <td>
              <button class="btn btn-info" onclick="buscar(<?php echo $item->getId();; ?>)">Detalhar</button>
              <button class="btn btn-primary" onclick="atualizar(<?php echo $item->getId() ?>)">Alterar</button>
              <button class="btn btn-danger" onclick="apagar(<?php echo $item->getId(); ?>)">Apagar</button>
            </td>
          </tr>
      <?php
        }
      ?>
      </table>
      <form id="form" method="post" action="../../controlador/rotasUsuario.php">                                
        <input type="hidden" name="acao" id="acao">
        <input type="hidden" name="id" id="id">
      </form>
    </div>       
    <?php    
        } else { //usuario nao autorizado
          header("Location: ../proibido.php");
        }
      
      } else { //redireciona pra tela de login
        header("Location: ../index.php");
      }
    ?>
  </body>
</html>