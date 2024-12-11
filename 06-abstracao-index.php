<?php

abstract class Bank {
    protected $balance;

    public function setBalance($b) {
        $this->balance = $b;
    }

    public function getBalance() {
        return "Saldo: R$ {$this->balance} <br>";
    }

    abstract protected function Withdraw($w);
    abstract protected function Deposit($d);
}

class Bradesco extends Bank {
    public function Withdraw($w) {
        $this->balance -= $w;
        echo "Sacou R$". $w. "<br>";
    }

    public function Deposit($d) {
        $this->balance += $d;
        echo "Depositou R$". $d. "<br>";
    }
}

$bradesco = new Bradesco();
$bradesco->setBalance(1000);
echo $bradesco->getBalance(). "<hr>";
$bradesco->Withdraw(150);
echo $bradesco->getBalance(). "<hr>";
$bradesco->Deposit(200);
echo $bradesco->getBalance(). "<hr>";