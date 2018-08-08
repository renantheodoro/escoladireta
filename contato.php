<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//function echo json_encode($jsonData, $exitAfterOutput = true) {
  //  header("Content-type: application/json; charset=utf-8", true);
    //echo json_encode($jsonData);
    //if ($exitAfterOutput)
      //  exit;
    //return true;
//}

if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] != 'undefined') {

    $recaptcha = $_POST['g-recaptcha-response'];
}

if (!$recaptcha) {

     $data = explode("&", $_POST['data']);

     $recaptcha_data = explode("=", $data[4]);

     $recaptcha = $recaptcha_data[1];

     if($recaptcha == '' || $recaptcha == 'undefined'){

         echo json_encode(array('status' => 'error', 'message' => 'Selecione a opção não sou um robô!'));
         exit;

     }

}

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?=secret=6Le4YBEUAAAAAIESGTQIAaNluhTD8M2NLbxfqqpV&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

if (!$resposta) {

    echo json_encode(array('status' => 'error', 'message' => 'Usuário mal intecionado idenficidado. A mensagem não foi enviada!'));
    exit;
}

$email_from = "contato@escoladireta.com.br";
$email_to = 'contato@escoladireta.com.br';

if (PATH_SEPARATOR == ';') {
    $quebra_linha = "\r\n";
} elseif (PATH_SEPARATOR == ':') {
    $quebra_linha = "\n";
} elseif (PATH_SEPARATOR != ';' and PATH_SEPARATOR != ':') {
    echo ('Esse script não funcionará corretamente neste servidor, a função PATH_SEPARATOR não retornou o parâmetro esperado.');
    exit;
}


    if (!isset($_POST['nome']) || empty($_POST['nome'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo nome!'));
        exit;
    } else {
        $nome = $_POST["nome"];
    }

    if (!isset($_POST['email']) || empty($_POST['email'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo e-mail!'));
        exit;
    } else {
        $email = $_POST["email"];
    }

    if (!isset($_POST['tel']) || empty($_POST['tel'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo telefone!'));
        exit;
    } else {
        $telefone = $_POST["tel"];
    }

    if (!isset($_POST['escola']) || empty($_POST['escola'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo sua escola!'));
        exit;
    } else {
        $escola = $_POST["escola"];
    }

    if (!isset($_POST['alunos']) || empty($_POST['alunos'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo número de alunos!'));
        exit;
    } else {
        $alunos = $_POST["alunos"];
    }


    if (!isset($_POST['cargo']) || empty($_POST['cargo'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo cargo!'));
        exit;
    } else {
        $cargo = $_POST["cargo"];
    }

    if (!isset($_POST['motivo']) || empty($_POST['motivo'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo motivo do contato!'));
        exit;
    } else {
        $motivo = $_POST["motivo"];
    }

    if (!isset($_POST['msg']) || empty($_POST['msg'])) {
        echo json_encode(array('status' => 'error', 'message' => 'Preencha o campo mensagem!'));
        exit;
    } else {
        $text = $_POST["msg"];
    }



    $headers = "MIME-Version: 1.0" . $quebra_linha . "";
    $headers .= "Content-type: text/html; charset=utf-8" . $quebra_linha . "";
    $headers .= "From: $email_from " . $quebra_linha . "";
    $headers .= "Return-Path: $email_from " . $quebra_linha . "";

    //envia o email sem anexo
    $assunto = 'Contato | Solicitação de contato'; // . $assunto;

    $message = "
            <html>
            <head>
            <title>$assunto</title>
            </head>
            <body>
            <h1>$assunto</h1>
            <p>Nome: " . $nome . "</p>
            <p>E-mail: " . $email . "</p>
            <p>Telefone: " . $telefone . "</p>
            <p>Nome da escola: " . $escola . "</p>
            <p>Número de alunos: " . $alunos . "</p>
            <p>Cargo: " . $cargo . "</p>
            <p>Motivo do contato: " . $motivo . "</p>
            <p>Mensagem: " . $text . "</p>
            </body>
            </html>
            ";

    $send = mail($email_to, $assunto, $message, $headers);

    if($send){
    header("Content-type: application/json; charset=utf-8", true);
      echo json_encode(array('status' => 'success', 'message' => 'Sua mensagem foi enviada com sucesso!'));
      exit;
    }else{
      echo json_encode(array('status' => 'error', 'message' => 'Sua mensagem não foi enviada com sucesso!'));
      exit;
    }
