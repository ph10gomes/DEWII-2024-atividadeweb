<?php

namespace Crud\Modelo;

class ModeloVeiculo
{
    private $codigo;
    private $fabricante;
    private $modelo;
	private $ano;
	private $cor;
	private $placa;

    public function __construct($f, $m, $a,$co,$p, $c = null) {
        $this->fabricante = $f;
        $this->modelo = $m;
        $this->codigo = $c;
		$this->ano = $a;
        $this->cor = $co;
        $this->placa = $p;
    }

	/**
	 * @return mixed
	 */
	public function getCodigo() {
		return $this->codigo;
	}
	
	/**
	 * @param mixed $codigo 
	 * @return self
	 */
	public function setCodigo($codigo): self {
		$this->codigo = $codigo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFabricante() {
		return $this->fabricante;
	}
	
	/**
	 * @param mixed $fabricante 
	 * @return self
	 */
	public function setFabricante($fabricante): self {
		$this->fabricante = $fabricante;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getModelo() {
		return $this->modelo;
	}
	
	/**
	 * @param mixed $modelo 
	 * @return self
	 */
	public function setModelo($modelo): self {
		$this->modelo = $modelo;
		return $this;
	}

	public function getAno(){
		return $this -> ano;
	}

	public function setAno($ano): self {
		$this->ano = $ano;
		return $this;
	}
    public function getCor(){
		return $this -> cor;
	}
	public function setCor($cor): self {
		$this->cor = $cor;
		return $this;
	}

	public function getPlaca(){
		return $this -> placa;
	}

	public function setaPlaca($placa): self {
		$this->placa = $placa;
		return $this;
	}

}
