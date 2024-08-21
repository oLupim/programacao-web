<?php

class Filme {
    private id $id;
    public string $titulo;
    public string $diretor;
    public int $classificacao;
    public int $quantidade;

    public function __construct( //método construtor da classe Filme
        string $titulo,
        string $diretor,
        int $classificacao,
        int $quantidade
    ){
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->classificacao = $classificacao;
        $this->quantidade = $quantidade;
    }
}

Class Cliente{
    public int $id;
    public string $nome;
    public int $cpf;
    public string $fone;
    public float $saldo_devedor;
    public string $endereco;

public function __construct(
    string $nome,
    int $cpf,
    string $fone,
    float $saldo_devedor,
    string $endereco
){
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->fone = $fone;
    $this->saldo_devedor = $saldo_devedor;
    $this->endereco = $endereco;
}
}

Class Locacao{
    private int $id;
    public DateTime $data;
    public DateTime $data_devolucao;
    public float $valor;
    public int $cliente_id;

public function __construct(
    int $id,
    DateTime $data,
    DateTime $data_devolucao,
    float $valor,
    int $cliente_id
){
    $this->id = $nome;
    $this->data = $data;
    $this->data_devolucacao = $data_devolucao;
    $this->valor = $valor;
    $this->cliente_id = $cliente_id;
}    
}

echo "<pre>";
$filme1 = new Filme("Spiderman", "Marc Webb", 14, 8);
var_dump($filme1); 

$cliente1 = new Cliente("Gustavo", 10210110111, "(48)9911-1122", 2.2, "Praia Grande SC");
var_dump($cliente1); 
