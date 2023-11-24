<?php
interface UserFactory {
    public function createUser($email, $name, $password);
}

class SignupUserFactory implements UserFactory {
    public function createUser($email, $name, $password) {
        return new SignupUser($email, $name, $password);
    }
}

class SignupUser {
    private $email;
    private $name;
    private $password;

    public function __construct($email, $name, $password) {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    }

    public function &getEmail() {
        return $this->email;
    }

    public function &getName() {
        return $this->name;
    }

    public function &getPassword() {
        return $this->password;
    }
}


?>