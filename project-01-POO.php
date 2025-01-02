<?php

// Classe modelo
abstract class Pessoa {
    protected int $idade;
    protected string $nome;
    protected string $sexo;

    public function __construct ($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    // Métodos abstratos
    abstract protected function setNome(string $s): void;
    abstract protected function getNome(): string;

    abstract protected function setIdade(int $i): void;
    abstract protected function getIdade(): int;
    
    abstract protected function setSexo(string $s): void;
    abstract protected function getSexo(): string;

    // Métodos genéricos
    public function Andar(): void {
        echo " {$this->getNome()} está andando... <br>";
    }

    public function Falar(): void {
        echo "{$this->getNome()} está falando... <br>";
    }

    public function Comer(): void {
        echo "{$this->getNome()} está comendo... <br>";
    }
}

// Classe filha
class Aluno extends Pessoa {
    public function setNome(string $s): void {
        $this->nome = $s;
    }
    public function getNome(): string {
        return $this->nome;
    }

    public function setIdade(int $i): void {
        if ($i < 0 || $i > 150) {
            throw new ValueError("Idade inválida.");
        }
        $this->idade = $i;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setSexo(string $s): void {
        if (!in_array($s, ["Masculino", "Feminino"])) {
            throw new ValueError(("Sexo inválido."));
        }
        $this->sexo = $s;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function VerificarIdade(): void {
         if ($this->getIdade() >= 18) {
            echo "{$this->getNome()} já é maior de idade. <br>";
        } else {
            echo "{$this->getNome()} ainda é menor de idade. <br>";
        }
    }

    public function VerificarSexo(): void {
        if ($this->getSexo() === "Masculino") {
            echo "{$this->getNome()} é um homem. <br>";
        } else {
            echo "{$this->getNome()} é uma mulher. <br>";
        }
    }
}

// Instanciando e tratamento de dados
try {
    $aluno = new Aluno("João Paulo", 20, "Masculino");
    // $aluno->Andar();
    // $aluno->Falar();
    // $aluno->Comer();
    $aluno->VerificarIdade();
    $aluno->VerificarSexo();
} catch (ValueError $e) {
    echo "Erro: {$e->getMessage()} <br>";
}