<?php
    require_once("../../database/connection.php");
    require_once("../../model/cadastro/Usuario.php");
    require_once("../../model/UsuarioDAO.php");
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senhaConfirm = $_POST["senha_confirm"];

    try {
        $user = new Usuario($email, $senha, $senhaConfirm);
    } catch(InvalidArgumentException $e) {
        header('Location: ' . '../../view/auth/cadastro.php?invalidEmail=' . $e->getMessage());
        die();
    } catch(Exception $e) {
        header('Location: ' . '../../view/auth/cadastro.php?invalidConfirm=' . $e->getMessage());
        die();
    }

    try {
        $writeDB = DB::connectWriteDB();
    } catch (PDOException $e) {
        error_log("Connection error - ".$e, 0);
        die();
    }

    $usuarioDAO = new UsuarioDAO($writeDB);

    try {
        $usuarioDAO->criaUsuario($user);
    } catch(Exception $e) {
        header("Location: " . "../../view/auth/cadastro.php?invalidEmail=" . $e->getMessage());
        die();
    }

    header("Location: " . "../../view/home/home.php");
