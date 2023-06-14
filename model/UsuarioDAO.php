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
}