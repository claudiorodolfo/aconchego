<?php
/**
 * @package modelo
 */

/**
 * Classe para conexão com BD MySQL. Ela utiliza o Padrão de Projeto Singleton
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 18, 2023
 */ 
class ConexaoMySQL {

	/** @var ConexaoMySQL $instancia é uma referência a esta própria classe */
	private static $instancia;
	/** @var Resource $conexao é um ponteiro para um conexão com o BD MySQL */
	private $conexao;
	
   /**
	* Cria uma conexão específica com um BD MySQL
	*/
    private function __construct() {
		//$data = file_get_contents("bd.json");
		//print($data);
		//$json = json_decode($data);
		//print $json->hostname;
		//print $json->username;
		//print $json->password;
		//print $json->schema;
		//$this->conexao = mysqli_connect($data->hostname,$data->username,$data->password,$data->schema);
		$this->conexao = mysqli_connect("localhost","claudior_claudio","Claudio2019","claudior_escola");
	}
	
   /**
	* Cria uma instância ou retorna uma instância, se já existir, dessa classe
	* @return ConexaoMySQL
	*/
 	public static function getInstance() {
        if (!isset(self::$instancia)) {
        	self::$instancia = new ConexaoMySQL();
        }
        return self::$instancia;
 	}

   /**
	* Retorna um ponteiro para um conexão com o BD MySQL
	* @return Resource 
	*/
	public function getConexao() {
		return $this->conexao;
	}
	
   /**
	* Desconecta do BD MySQL
	*/
	public function desconectar() {
		mysqli_close($this->conexao);
	}
}
?>