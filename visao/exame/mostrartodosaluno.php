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
    <title>Exames do Aluno</title>    
    <script src="js/script.js"></script>        
  </head> 
  <body onload="buscarTodos()">
  <?php        
      require_once '../../entidades/Exame.php' ;
      session_start();
  ?>    
  <div class="container">
    <br><br>
    <a class="btn btn-outline-primary" href="editar.php">Novo Usuário</a>
    <br><br>
    <table class='table table-striped table-bordered'>
      <tr>
        <th>Exame</th>
        <th>Papel</th>
      </tr>
      <?php        
        $array = unserialize($_SESSION['array_exame']);
        //session_destroy();
        foreach($array as $item) {
      ?>
          <tr>
            <td><?php echo $item->getExame(); ?></td>
            <td><?php echo $item->getPapel(); ?></td>
          </tr>
      <?php
        }
      ?>
      </table>
      <form id="form" method="post" action="../../controlador/rotasExame.php">                                
        <input type="hidden" name="acao" id="acao">
        <input type="hidden" name="id" id="id">
      </form>
    </div>       
  </body>
</html>