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
	* busca por uma Usuario
	* @param Usuario $usuario objeto POJO de uma Usuario
	*/
	public function buscar($item);

	/**
	* busca todas as avaliações
	*/
	public function buscarTodos();
	}
?>