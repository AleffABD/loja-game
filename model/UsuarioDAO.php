<?php

class UsuarioDAO {
    private PDO $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function criaUsuario(Usuario $usuario)
    {
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();

        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (email, senha) VALUES (:email, :senha)";

        $query = $this->conexao->prepare($sql);
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->bindParam(":senha", $hash, PDO::PARAM_STR);
        $query->execute();

        $rowCount = $query->rowCount();

        if(!$rowCount) {
            return throw new Exception("Houve um erro criando sua conta");
        }
    }

    public function logaUsuario(UsuarioLogin $usuario){
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();

        $sql = "SELECT senha FROM users WHERE email = :email";

        $query = $this->conexao->prepare($sql);
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->execute();

        $rowCount = $query->rowCount();

        if(!$rowCount) {
            return throw new Exception("Usuario não encontrado");

        }

        $row = $query->fetch(PDO::FETCH_ASSOC);

        $bancoSenha = $row["senha"];

        if(!password_verify($senha, $bancoSenha)){
        return throw new Exception("Usuario ou senha incorretos");
        }

        

    }
}