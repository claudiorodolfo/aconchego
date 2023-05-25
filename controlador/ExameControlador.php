<?php
/**
 * @package controlador
 */
    //require_once '../entidades/Usuario.php';
    require_once '../entidades/Exame.php';
	require_once '../modelo/ExameDAOMySQL.php';

/**
 * Classe que faz interface entre camada Visão e Modelo
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 25, 2023
 */
class ExameControlador {

	/** @var ExameDAOMySQL $dao realiza operações no BD MySQL */
    private $dao;

   /**
	* Instancia @var ExameDAOMySQL $dao como UsuarioDAOMySQL
	*/
    public function __construct() {
        $this->dao = new ExameDAOMySQL();
    }

   /**
	* Busca um registro do BD
	* @param Int $id é o identificador do registro que será buscado
	* @return Exame[]
	*/
    public function buscarPorAluno($item) {
        return $this->dao->buscarPorAluno($item);
    }

   /**
	* Busca todos os Usuarios do BD
	* @return Exame[]
	*/
    public function buscarTodos() {
        return $this->dao->buscarTodos();
    }
}