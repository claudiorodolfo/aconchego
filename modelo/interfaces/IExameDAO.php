<?php
/**
* @package modelo
*/

/**
* Interface com as operações que podem ser realizadas no BD relacionadas a Usuario
*
* @author Cláudio Rodolfo S. de Oliveira
* @version Versão Inicial May 25, 2023
*/
interface IAvaliacaoDAO {

	/**
	* busca por um Aluno
	* @param Usuario $usuario objeto POJO de Usuario
	*/
	public function buscarPorAluno($aluno);

	/**
	* busca todos os exames
	*/
	public function buscarTodos();
	}
?>