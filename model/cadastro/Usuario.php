<?php

class Usuario {
    private $email; 
    private $senha;
    private $senhaConfirm;

    public function getEmail(){
        return $this->email;
        
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($email){
        if(!str_contains($email,'@'))
        {
            return;
        }
        
        $this->email=$email;
    }
}

