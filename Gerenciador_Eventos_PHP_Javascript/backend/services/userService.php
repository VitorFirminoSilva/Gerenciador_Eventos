<?php

    require_once '../config.php';
    $body = json_decode(file_get_contents('php://input'));
    $service = $body->service;
    $object = $body->object[0];
    
    /*if ($_POST["service"] == "/session") {
        session_start();
        echo $_SESSION["logado"];
        return;
    }*/  
 
    if ($service === "/create") {
        $controller = new controller\UserController();
        $user = new model\User();
        $user->name = clearInputs($object->name);
        $user->birthDate = dateReturn(clearInputs($object->birthDate)); 
        $user->CEP = clearInputs($object->CEP);
        $user->city = clearInputs($object->city); 
        $user->UF = clearInputs($object->UF);
        $user->address = clearInputs($object->address); 
        $user->cellphone = clearInputs($object->cellphone);
        $user->CPF = clearInputs($object->CPF);
        $user->email = clearInputs($object->email);
        $user->password = clearInputs($object->password);
        $user->logged = false; 
        $user->active = true;
        $user->userLevel = model\UserLevel::DEFAULT;
        $teste = dateReturn(clearInputs($object->birthDate));
        
        //var_dump(sha1($user->password),);
        $controller->create($user);
        return;
    }
    
    /*if ($_POST["service"] == "/edit") {
        $controller = new controller\UserController();
        $user = new model\User( $_REQUEST["name"], 
                                $_REQUEST["birthDate"], 
                                $_REQUEST["CEP"],
                                $_REQUEST["city"], 
                                $_REQUEST["UF"],
                                $_REQUEST["address"], 
                                $_REQUEST["cellphone"],
                                $_REQUEST["CPF"],
                                $_REQUEST["email"],
                                $_REQUEST["password"],
                                $_REQUEST["confirm"], 
                                $_REQUEST["active"], 
                                $_REQUEST["userLevel"] );
        $user->idUser = $_REQUEST["idUser"];

        $controller->edit($user);
    }
    
    if ($_POST["service"] == "/delete") {
        $controller = new controller\UserController();
        $id = $_REQUEST["idUser"];
        return $controller->delete($idUser);
    }

/*
if ($_POST["op"] == 1) {
    $dados = new conexao\Conexao();
    $valor = array(
        ":identificacao" => $_REQUEST["id"]
    );

    $volta = $dados->select("SELECT identificacao, nome, 
            telefone, endereco, cidade, uf, cep, email, tipo,
            login FROM participante WHERE identificacao = :identificacao", $valor);

    if ($volta != null) {
        echo json_encode($volta);
    } else {
        echo "FALSE";
        return;
    }
}








if ($_POST["op"] == 5) {
    $dados = new conexao\Conexao();

    $valor = array(
        ":login" => $_REQUEST["login"]
    );
    
    $volta = $dados->selectUnit("SELECT * FROM participante WHERE login = :login", $valor);

    if ($volta != null) {
        echo json_encode(Array($volta));
    } else {
        echo "FALSE";
    }
}

if ($_POST["op"] == 6) {
    $dados = new conexao\Conexao;
    $tabela = new controle\ControleParticipante();
    session_start();
    $logado = $_SESSION["logado"];

   
    $obj = json_decode($logado, true)[0]['identificacao'];
    if ($_REQUEST["tipo"] == "") {
        $volta = $dados->select("SELECT identificacao, nome, tipo, email FROM participante");
    } else if ($_REQUEST["tipo"] == "id") {
        $valor = array(
            ":identificacao" => $_REQUEST["str"]
        );
        $volta = $dados->select("SELECT identificacao, nome, tipo, email FROM participante WHERE identificacao = :identificacao", $valor);
    } else if ($_REQUEST["tipo"] == "nome") {
        $valor = array(
            ":nome" => $_REQUEST["str"].'%'
        );
        $volta = $dados->select("SELECT identificacao, nome, tipo, email FROM participante WHERE nome LIKE :nome ", $valor);
    }


    echo $tabela->montaTabela($volta, $obj);
}*/
?>
