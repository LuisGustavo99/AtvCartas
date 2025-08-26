<?php

class Carta
{
    private $numero;
    private $nome;

    public function __toString()
    {
        return sprintf("Número: %s, Nome: %s\n", $this->numero, $this->nome);
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }
}


$cartas = [];

$cris = new Carta();
$cris->setNumero(1)->setNome("Cristiano Ronaldo");

$ney = new Carta();
$ney->setNumero(2)->setNome("Neymar");

$yuri = new Carta();
$yuri->setNumero(3)->setNome("Yuri Alberto");

$memphis = new Carta();
$memphis->setNumero(4)->setNome("Memphis Depay");

$rg = new Carta();
$rg->setNumero(5)->setNome("Rodrigo Garro");

$messi = new Carta();
$messi->setNumero(6)->setNome("Lionel Messi");

$r9 = new Carta();
$r9->setNumero(7)->setNome("Ronaldo Nazario");

$cartas = [$cris, $ney, $yuri, $memphis, $rg, $messi, $r9];

// eu pesquisei array_rand — Escolha uma ou mais chaves aleatórias de uma matriz 

$cartaSorteada = $cartas[array_rand($cartas)];

echo "jogos das cartas tente adivinhar a carta sorteada!\n\n";
echo "Cartas disponíveis:\n";

foreach ($cartas as $car) {
    echo $car;
}

$tentativas = 0;


do {
    $palpite = readline("\nDigite algum numero pra ser sorteado: ");
    $tentativas++;


    if ((int)$palpite  === $cartaSorteada->getNumero()) {
        echo "\nVocê acertou!\n";
        echo "Carta sorteada: " . $cartaSorteada;
        echo "Tentativas: $tentativas\n";
        break;
    } else {
        echo "\n  Errou !! Tente novamente.\n";
    }
} while (true);
