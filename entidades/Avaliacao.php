<?php
/**
 * @package entidades
 */

/**
 * Classe POJO para mapeamento ORM
 * 
 * @author Cláudio Rodolfo S. de Oliveira
 * @version Versão Inicial May 26, 2023
 */
class Avaliacao {
    private $idAvaliacao;
	private $aluno;
	private $idAluno;
	private $professor;
	private $exame;
	private $papel;
	private $nivel;
	private $observacao;
	private $status;

	public function __construct() {}

	public function getIdAvaliacao() {
		return $this->idAvaliacao;
	}
	
	public function setIdAvaliacao($idAvaliacao) {
		$this->idAvaliacao = $idAvaliacao;
	}

	public function getAluno() {
		return $this->aluno;
	}
	
	public function setAluno($aluno) {
		$this->aluno = $aluno;
	}

	public function getIdAluno() {
		return $this->idAluno;
	}
	
	public function setIdAluno($idAluno) {
		$this->idAluno = $idAluno;
	}

	public function getProfessor() {
		return $this->professor;
	}
	
	public function setProfessor($professor) {
		$this->professor = $professor;
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

	public function getNivel() {
		return $this->nivel;
	}
	
	public function setNivel($nivel) {
		$this->nivel = $nivel;
	}
	public function getObservacao() {
		return $this->observacao;
	}
	
	public function setObservacao($observacao) {
		$this->observacao = $observacao;
	}
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
	}

	public function imprimir() {
		return print_r($this);
	}
}