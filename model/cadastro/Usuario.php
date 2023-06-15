<?php

class Usuario {
    private $email; 
    private $senha;

    public static function comEmailESenha($email, $senha) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return throw new InvalidArgumentException("Email mal formatado");
        }
        
        self::$email=$email;
        self::$senha = $senha;
    }

    function __construct($email, $senha, $senhaConfirm){
        $this->setEmail($email);
        $this->setSenha($senha, $senhaConfirm);
    }

    public function getEmail(){
        return $this->email;
        
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return throw new InvalidArgumentException("Email mal formatado");
        }
        
        $this->email=$email;
    }

    public function setSenha($senha, $senhaConfirm){
        if($senha !== $senhaConfirm) {
            return throw  new Exception("Senhas não coincidem");
        }

        if(strlen($senha) < 6) {
            return throw  new Exception("Senha deve ter no mínimo 6 caracteres");
        }

        $this->senha = $senha;
    }
}
