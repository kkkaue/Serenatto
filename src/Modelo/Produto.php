<?php

class Produto
{
  private int $id;
  private string $tipo;
  private string $nome;
  private string $descricao;
  private string $imagemPath;
  private float $preco;

  public function __construct(
    int $id,
    string $tipo,
    string $nome,
    string $descricao,
    string $imagemPath,
    float $preco
  ) {
    $this->id = $id;
    $this->tipo = $tipo;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->imagemPath = $imagemPath;
    $this->preco = $preco;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getTipo(): string
  {
    return $this->tipo;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getDescricao(): string
  {
    return $this->descricao;
  }

  public function getImagemPath(): string
  {
    return $this->imagemPath;
  }

  public function getPreco(): float
  {
    return $this->preco;
  }
}