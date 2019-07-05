<?php 
	class Pessoa {
		//Atributos.
		private $nome;
		private $idade;
		private $sexo;

		//Métodos especiais.

		//Inicio da função construct.
		public function __construct($nome, $idade, $sexo){
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
		}
		//Fim da função construct.

		public function getNome() {
		    return $this->nome;
		}
		public function setNome($nome) {
		    $this->nome = $nome;
		}
		public function getIdade() {
		    return $this->idade;
		} 
		public function setIdade($idade) {
		    $this->idade = $idade;
		}
		public function getSexo() {
		    return $this->sexo;
		}
		public function setSexo($sexo) {
		    $this->sexo = $sexo;
		}

		//Outras funções.
		public function fazerAniversario(){
			$this->setIdade($this->getIdade() + 1);
		}
	}

 ?>