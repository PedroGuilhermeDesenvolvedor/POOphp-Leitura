<?php 
	//Inicio da class Livro.
	require_once "Publicacao.php";	
	class Livro implements Publicacao{
		//Atributos.
		private $titulo;
		private $autor;
		private $totalPaginas;
		private $paginaAtual;
		private $aberto;
		private $leitor;

		//Métodos especiais.

		public function __construct($titulo, $autor, $totalPaginas, $leitor){
			$this->setTitulo($titulo);
			$this->setAutor($autor);
			$this->setTotalPaginas($totalPaginas);
			$this->setLeitor($leitor);
			$this->setAberto(false);
			$this->setPaginaAtual(0);
		}

		public function getTitulo() {
		    return $this->titulo;
		}
		public function setTitulo($titulo) {
		    $this->titulo = $titulo;
		}
		public function getAutor() {
		    return $this->autor;
		}
		public function setAutor($autor) {
		    $this->autor = $autor;
		}
		public function getTotalPaginas() {
		    return $this->totalPaginas;
		}
		public function setTotalPaginas($totalPaginas) {
		    $this->totalPaginas = $totalPaginas;
		}
		public function getPaginaAtual() {
		    return $this->paginaAtual;
		}
		public function setPaginaAtual($paginaAtual) {
		    $this->paginaAtual = $paginaAtual;
		}
		public function getAberto() {
		    return $this->aberto;
		}
		public function setAberto($aberto) {
		    $this->aberto = $aberto;
		}
		public function getLeitor() {
		    return $this->leitor;
		}
		public function setLeitor($leitor) {
		    $this->leitor = $leitor;
		}

		//Outras funções.

		//Inicio da função detalhes.
		public function detalhes(){

		}
		//Fim da função detalhes.

		//Inicio da unção abrir.
		public function abrir(){
			if (!$this->getAberto()){
			$this->setAberto = true;
			}
			else {
				echo "Livro já esta aberto";
			}
		}
		//Fim da função abrir.

		//Inicio da função fechar.
		public function fechar(){
			if ($this->getAberto()){
				$this->setAberto = false;
			}
			else {
				echo "Livro já esta fechado";
			}
		}
		//fim da função fechar.

		//Inicio da função folhear.
		public function folhear($pagina){
			if ($this->getAberto){
				if ($pagina > $this->getTotalPaginas()){
					$this->setPaginaAtual(0);
				}
				else {
					$this->setPaginaAtual($pagina);
				}
			}
			else {
				echo "Não é possivel folhear um livro fechado!";
			}
		}
		//Fim da função folhear.

		//Inicio da função avancarPagina.
		public function avancarPagina (){
			if (! ( ($this->getPaginaAtual() + 1) > $this->getTotalPaginas() ) ){
				if ($this->getAberto()){
					$this->setPagina($this->getPaginaAtual() + 1);
				}
				else {
					echo "Não é possivel avançar a pagina de um livro fechado!";
				}
			}
			else {
				echo "Livro já terminou!";
			}
		}
		//Fim da função avancarPagina.

		//inicio da função voltarPagina.
		public function voltarPagina(){
			if ($this->getPaginaAtual() != 0){
				if ($this->getAberto()){
					$this->setPagina($this->getPaginaAtual() - 1);
				}
				else {
					echo "Não é possivel voltar a pagina de um livro fechado!";
				}
			}	
			else {
				echo "Livro já está na pagina 0!";
			}	
		}
		//Fim da função voltarPagina.
	}
	//Fim da class Livro.	

?>