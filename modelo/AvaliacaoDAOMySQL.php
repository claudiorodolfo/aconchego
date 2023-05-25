<?php
/**
 * @package model
 */
require_once '../entidades/Avaliacao.php';
require_once 'interfaces/IAvaliacaoDAO.php';
require_once 'conexoes/ConexaoMySQL.php';
require_once 'util/Auxiliar.php';

/**
 * Classe com a implementação das operações que podem ser realizadas no BD
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 25, 2023
 */
class UsuarioDAOMySQL implements IUsuarioDAO {

	/** @var Auxiliar $auxiliar objeto da Classe de Métodos auxiliares */
	private $auxiliar;
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
	* Busca uma Avaliacao especifica no banco de dados MySQL
	* @param Avaliacao $avaliacao objeto POJO de uma Avaliacao
	* @return Avaliacao
	*/	
	public function buscar($item) {
		/** @var string $sql contém a instrução SQL a ser executada no BD */
		$sql = "SELECT Avaliacao.id, Avaliacao.aluno as idAluno, aluno.nome, professor.nome, Avaliacao.nivel
		FROM Avaliacao, Usuario aluno, Usuario professor
		WHERE Avaliacao.aluno = aluno.id and Avaliacao.professor = professor.id and
		idAluno = {$item->getIdAluno()} and Avaliacao.exame = \"{$item->getExame()}\" and papel = \"{$item->getPapel()}\"";		
		//print $sql;
		$avaliacao;
		$dados = mysqli_query($this->conexao, $sql);
		if (mysqli_num_rows($dados) > 0) {
			$linha = mysqli_fetch_array($dados);
			$avaliacao = new Avaliacao();
			$avaliacao->setId($linha['id']);
			$avaliacao->setAluno($linha['aluno']);
			$avaliacao->setIdAluno($item->getIdAluno());
			$avaliacao->setProfessor($linha['professor']);       
			$avaliacao->setExame($item->getExame());
			$avaliacao->setPapel($item->getPapel());
			$avaliacao->setNivel($linha['nivel']);

			$avaliacao->setExame($this->auxiliar->dataColocaMascara($avaliacao->getExame()));
		}	
		return $avaliacao;
	}	

   /**
	* Desconecta do BD
	*/
	public function __destruct() {
		self::$mysqlDB->desconectar();
	}
}
?>