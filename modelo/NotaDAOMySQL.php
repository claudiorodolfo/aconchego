<?php
/**
 * @package model
 */
require_once '../entidades/Nota.php';
require_once 'interfaces/INotaDAO.php';
require_once 'conexoes/ConexaoMySQL.php';

/**
 * Classe com a implementação das operações que podem ser realizadas no BD
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 18, 2023
 */
class UsuarioDAOMySQL implements IUsuarioDAO {

	/** @var Resource $conexao é um ponteiro para um conexão com o BD MySQL */
	private $conexao;
	/** @var ConexaoMySQL $mysqlDB é uma instância da classe de manipulação da conexão com o BD */
	private static $mysqlDB;

   /**
	* Cria uma instância do banco e realiza a conexão.
	*/
	public function __construct() {
		self::$mysqlDB = ConexaoMySQL::getInstance();
		$this->conexao = self::$mysqlDB->getConexao();
	}

   /**
	* Busca uma Usuario especifica no banco de dados MySQL
	* @param Usuario $usuario objeto POJO de uma Usuario
	* @return Usuario
	*/	
	public function buscar($avaliacao) {
		/** @var string $sql contém a instrução SQL a ser executada no BD */
		$sql = "SELECT velocidade, quesito, nota
		FROM Nota, Parametro
		WHERE Nota.parametro = Parametro.id and avaliacao = {$avaliacao->getId()}}";
		//print $sql;
		$array = [];
		$dados = mysqli_query($this->conexao, $sql);
		$quantidade = mysqli_num_rows($dados);
		for($i = 0; $i < $quantidade; $i++) {
			$linha = mysqli_fetch_array($dados);
			$nota = new Nota();
			$nota->setVelocidade($linha['velocidade']);
			$nota->setQuesito($linha['quesito']);
			$nota->setNota($linha['nota']);       
			$array[$i] = $nota;		
		}	
		return $notas;
	}	

   /**
	* Desconecta do BD
	*/
	public function __destruct() {
		self::$mysqlDB->desconectar();
	}
}
?>