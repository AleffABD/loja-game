<?php
require_once("../../model/cadastro/UsuarioLogin.php");
require_once("../../database/connection.php");
require_once("../../model/UsuarioDAO.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

try{
    $user = new UsuarioLogin($email, $senha);

}catch(InvalidArgumentException $e){
    header("Location: " . "../../view/auth/login.php");
    die();
}

try {
    $readDB = DB::connectReadDB();
} catch (PDOException $e) {
    error_log("Connection error - ".$e, 0);
    die();
}

$usuarioDAO=new UsuarioDAO($readDB);

try {
    $usuarioDAO->logaUsuario($user);
} catch(Exception $e) {
    header("Location: " . "../../view/auth/login.php?invalidEmail=" . $e->getMessage());
    die();
}

header("Location: " . "../../view/home/home.php");

