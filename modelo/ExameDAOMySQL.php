<?php
/**
 * @package model
 */
require_once '../entidades/Usuario.php';
require_once '../entidades/Exame.php';
require_once 'interfaces/IExameDAO.php';
require_once 'conexoes/ConexaoMySQL.php';
require_once 'util/Auxiliar.php';

/**
 * Classe com a implementação das operações que podem ser realizadas no BD
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 25, 2023
 */
class ExameDAOMySQL implements IExameDAO {

	/** @var Resource $conexao é um ponteiro para um conexão com o BD MySQL */
	private $conexao;
	/** @var ConexaoMySQL $mysqlDB é uma instância da classe de manipulação da conexão com o BD */
	private static $mysqlDB;
	/** @var Auxiliar $auxiliar objeto da Classe de Métodos auxiliares */
	private $auxiliar;	

   /**
	* Cria uma instância do banco e realiza a conexão.
	*/
	public function __construct() {
		self::$mysqlDB = ConexaoMySQL::getInstance();
		$this->conexao = self::$mysqlDB->getConexao();

		$this->auxiliar = new Auxiliar();
	}

    /**
	* Busca os Exames feitos por uma aluno especifico no banco de dados MySQL
	* @param Aluno $aluno objeto POJO de Aluno
	* @return Exame[]
	*/	
	public function buscarPorAluno($aluno) {
		/** @var string $sql contém a instrução SQL a ser executada no BD */	
        $sql = "SELECT exame, papel " .
                "FROM Usuario, Avaliacao " .
                "WHERE Usuario.id = Avaliacao.aluno and Avaliacao.rascunho = 0 and Usuario.id = {$aluno->getId()} " .
                "ORDER BY exame desc";
		//print $sql;
		$dados = mysqli_query($this->conexao, $sql);
		/** @var array é um vetor de Exames */
		$array = [];
		/** @var quantidade é o número de registros retornados do BD */
		$quantidade = mysqli_num_rows($dados);
		for($i = 0; $i < $quantidade; $i++) {
			$linha = mysqli_fetch_array($dados);
			$item = new Exame();
			$item->setIdAluno($aluno->getId());
			$item->setExame($linha['exame']);
			$item->setPapel($linha['papel']); 
			
			$item->setExame($this->auxiliar->dataColocaMascara($item->getExame()));
			
			$array[$i] = $item;
		}
		return $array;
	}

     /**
	* Busca uma Avaliacao especifica no banco de dados MySQL
	* @param Avaliacao $avaliacao objeto POJO de uma Avaliacao
	* @return Avaliacao
	*/	
	public function buscarTodos() {

	}	

   /**
	* Desconecta do BD
	*/
	public function __destruct() {
		self::$mysqlDB->desconectar();
	}
}
?>