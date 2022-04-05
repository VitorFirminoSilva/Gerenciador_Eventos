<?php

    require_once '../config.php';
    
    function loginUser(){
        $dados = new conexao\Conexao();
        $valor = array(
            ":email" => clearInputs($_REQUEST["email"]),
            ":password" => crypt(clearInputs($_REQUEST["password"]), $GLOBALS["salt"])
        );  
    }
    
if ($_POST["tipo"] == 1) {
    $dados = new conexao\Conexao();

    $valor = array(
        ":login" => $_REQUEST["login"],
    );

    $volta = $dados->select("SELECT login FROM participante WHERE login = :login", $valor);
    echo json_encode($volta);
}

if ($_POST["tipo"] == 2) {
    $dados = new conexao\Conexao();
    $valor = array(
        ":login" => $_REQUEST["login"],
        ":senha" => md5($_REQUEST["pass"])
    );

    $volta = $dados->select("SELECT identificacao, nome, tipo FROM participante WHERE login = :login and senha = :senha", $valor);

    if (empty($volta)) {
        ob_end_clean();
        echo "FALSE";
        return;
    } else {
        ob_end_clean();
        session_start();
        $_SESSION["logado"] = json_encode($volta);

        echo $_SESSION["logado"];
        return;
    }
}

?>

