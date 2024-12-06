<?php

class UserLogin {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_VALIDATE_EMAIL);
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($p) {
        return $this->password = $p;
    }

    public function Authenticate() {
        if ($this->getEmail() == "bruce.lee@example.com" && $this->getPassword() == "12345678") {
            return "User authenticated.";
        }
        return "User not authenticated.";
    }
}

$user1 = new UserLogin("bruce.lee@example.com", "12345678");
echo $user1->Authenticate();