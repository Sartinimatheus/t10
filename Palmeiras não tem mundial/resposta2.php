<?php
// Definindo a classe Carro
class torcedor {
    public $nome;
    public $time;
    public $idade;

    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade) {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }

    // Método para exibir informações
    public function exibir() {
        echo "torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";
    }
}

// Criando objetos (instâncias)
$torcedor1 = new torcedor("Matheus", "Vasco", 127);
$torcedor2 = new torcedor("Gustavo", "Mirrasol", 100);


// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
?>
