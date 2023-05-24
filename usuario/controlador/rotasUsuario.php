<?php
/**
 * @package controlador
 */
	require_once '../entidades/Usuario.php';
	require_once 'UsuarioControlador.php';

/**
 * Arquivo de rotas
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 18, 2023
 */

/** @var String $_POST['acao'] define a ação que o usuário deseja executar no CRUD */
if (isset($_POST['acao'])) {
    /** @var UsuarioControlador $controlador permite chamar os métodos do controlador */
    $controlador = new UsuarioControlador();
    session_start();
    switch ($_POST['acao']) {
        case 'autenticar':
            $item = $controlador->autenticar($_POST);
            if (isset($item)) {
                $_SESSION['login'] = serialize($item);
                header("Location: ../visao/usuario/index.php");
            } else {
                header("Location: ../visao/usuario/autenticacao.php");
            }
            break;
        case 'salvar':
            $controlador->salvar($_POST);
            header("Location: ../visao/usuario/index.php");
            break;
        case 'apagar':
            $controlador->apagar($_POST['id']);
            header("Location: ../visao/usuario/index.php");
            break;
        case 'buscar_detalhe':
            $item = $controlador->buscar($_POST['id']);
            $_SESSION['usuario'] = serialize($item);
            header("Location: ../visao/usuario/mostrardetalhe.php");
            break;
        case 'buscar_atualizacao':
            $item = $controlador->buscar($_POST['id']);
            $_SESSION['operacao'] = "atualizacao_usuario";
            $_SESSION['usuario'] = serialize($item);
            header("Location: ../visao/usuario/editar.php");
            break;
        case 'buscar_todos':
            $array = $controlador->buscarTodos();
            $_SESSION["array"] = serialize($array);        
            //print "<script>location.href='../visao/usuario/mostrartodos.php';</script>";   
            header("Location: ../visao/usuario/mostrartodos.php");
            break;
        default:
    }
}
?>