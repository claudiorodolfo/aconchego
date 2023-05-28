<?php
/**
 * @package controlador
 */
    require_once '../entidades/Usuario.php';
    require_once '../entidades/Avaliacao.php';
	require_once 'AvaliacaoControlador.php';

/**
 * Arquivo de rotas
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 25, 2023
 */

/** @var String $_POST['acao'] define a ação que o usuário deseja executar no CRUD */
if (isset($_POST['acao'])) {
   
    /** @var AvaliacaoControlador $controlador permite chamar os métodos do controlador */
    $controlador = new AvaliacaoControlador();

    session_start();   
    switch ($_POST['acao']) {
        case 'buscar_por_aluno':
            $user = unserialize($_SESSION['login']);  
            $array = $controlador->buscarporAluno($user);
            $_SESSION['array_avaliacao'] = serialize($array);
            header("Location: ../visao/exame/mostrartodosaluno.php");
            break;
            case 'buscar_avaliacao_aluno':
                $exames = unserialize($_SESSION['array_avaliacao']);
                $item = $controlador->buscar($_POST['id']);
                $e = $exames[$item];
                $avaliacao = $controlador->buscarAvaliacaoAluno($e);
                $_SESSION['avaliacao'] = serialize($avaliacao);
                $array_notas = $controlador->buscarNotasAvaliacao($avaliacao);
                $_SESSION['array_notas'] = serialize($array_notas);
                header("Location: ../visao/avaliacao/mostraravaliacao.php");
                break;
            case 'buscar_todos':
                //  $array = $controlador->buscarTodos();
                // $_SESSION["array_exame"] = serialize($array);        
                //print "<script>location.href='../visao/usuario/mostrartodos.php';</script>";   
                // header("Location: ../visao/exame/mostrartodos.php");
                break;
        default:
    }
}
?>