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
class Usuario {
    private $id;
	private $aluno;
	private $idAluno;
	private $professor;
	private $exame;
	private $papel;
	private $nivel;

	public function __construct() {}

	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
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
	
	public function imprimir() {
		return print_r($this);
	}
}