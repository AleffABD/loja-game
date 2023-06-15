<?php

class UsuarioLogin {
    private $email; 
    private $senha;

    

    function __construct($email, $senha){
        $this->setEmail($email);
        $this->setSenha($senha);
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

    public function setSenha($senha){
       
        $this->senha = $senha;
    }
}
