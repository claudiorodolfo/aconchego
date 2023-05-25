<?php
/**
 * @package controlador
 */
    require_once '../entidades/Usuario.php';
    require_once '../entidades/Exame.php';
	require_once 'ExameControlador.php';

/**
 * Arquivo de rotas
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 25, 2023
 */

/** @var String $_POST['acao'] define a ação que o usuário deseja executar no CRUD */
if (isset($_POST['acao'])) {
   
    /** @var ExameControlador $controlador permite chamar os métodos do controlador */
    $controlador = new ExameControlador();

    session_start();   
    switch ($_POST['acao']) {
        case 'buscar_por_aluno':
            $user = unserialize($_SESSION['login']);  
            $array = $controlador->buscarporAluno($user);
            $_SESSION['array_exame'] = serialize($array);
            header("Location: ../visao/exame/mostrartodosaluno.php");
            break;
        case 'buscar_todos':
            $array = $controlador->buscarTodos();
            $_SESSION["array_exame"] = serialize($array);        
            //print "<script>location.href='../visao/usuario/mostrartodos.php';</script>";   
            header("Location: ../visao/exame/mostrartodos.php");
            break;
        default:
    }
}
?>