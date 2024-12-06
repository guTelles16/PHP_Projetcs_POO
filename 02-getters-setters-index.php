<?php

class Login {
    public $email;
    public $password;

    public function Authenticate() {
        if ($this->email == "email@example.com" && $this->password == "123456") {
            return "User authenticated.";
        }
            return "User not authenticated.";
    }
}

$login1 = new Login();
$login1->email = "email@example.com";
$login1->password = "123456";
// echo $login1->Authenticate();

class User {
    private $name;
    private $email;
    private $password;

    public function getName() {
        return $this->name;
    }

    public function setName($n) {
        return $this->name = $n;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        return $this->email = $e;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($p) {
        $this->password = $p;
    }

    public function UserDescription() {
        return "Nome: {$this->getName()} <br> Email: {$this->getEmail()} <br> Senha: {$this->getPassword()} <br>";
    }

    public function UserAuthenticate() {
        if ($this->getName() == "Bruno Mars" && $this->getEmail() == "bruno.mars@example.com" && $this->getPassword() == "123456") {
            return "User authenticated.";
        }
        return "User not authenticated.";
    }
}

$user1 = new User();
$user1->setName('Bruno Mars');
// echo $user1->getName();
$user1->setEmail('bruno.mars@example.com');
// echo $user1->getEmail();
$user1->setPassword('123456');
// echo $user1->getPassword();
// echo $user1->UserDescription();
echo $user1->UserAuthenticate();