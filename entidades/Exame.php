<?php
/**
 * @package entidades
 */

/**
 * Classe POJO para mapeamento ORM
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 25, 2023
 */
class Exame {
    private $idAluno;
	private $exame;
	private $papel;

	public function __construct() {}

	public function getIdAluno() {
		return $this->idAluno;
	}
	
	public function setIdAluno($idAluno) {
		$this->idAluno = $idAluno;
	}

	public function getExame() {
		return $this->exame;
	}
	
	public function setExame($exame) {
		$this->exame = $exame;
	}

	public function getPapel() {
		return $this->papel;
	}
	
	public function setPapel($papel) {
		$this->papel = $papel;
	}

	public function imprimir() {
		return print_r($this);
	}
}
?>