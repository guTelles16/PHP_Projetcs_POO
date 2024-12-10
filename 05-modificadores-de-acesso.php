<?php

// Public: pode ser acessado dentro e fora da classe.
// Private: está restrito apenas a uma determinada classe.
// Protected: está restrito a uma determinada classe e suas filhas.

class User {
    protected $name;
    protected $email;
    protected $password;
    
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

class Admin extends User {
    public function getAdminName() {
        return $this->name;
    }
    public function setAdminName($n) {
        return $this->name = $n;
    }

    public function getAdminEmail() {
        return $this->email;
    }

    public function setAdminEmail($e) {
        return $this->email = $e;
    }

    public function getAdminPassword() {
        return $this->password;
    }

    public function setAdminPassword($p) {
        return $this->password = $p;
    }
}

$admin1 = new Admin("Justin Timberlake", "jtimberlake@example.com", "123456");
echo $admin1->getAdminName();
echo "<br>";
echo $admin1->getAdminEmail();