<?php

$nome ="";
$email ="";
$texto = "";
$mensagem = ">>>>>Preencha o formulário para cadastrar sua mensagem<<<<<";

if (isset($_POST["nome"], $_POST["email"], $_POST["texto"])){
    $conexao = new PDO("mysql:host=localhost;dbname=site1", "root","");

    //filter_input limpa os dados depois de inserido
    $nome = filter_input(INPUT_POST, "nome", FILTER_UNSAFE_RAW); 
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $texto = filter_input(INPUT_POST, "texto", FILTER_UNSAFE_RAW);

    //verificação de dados invalidos
    if(!$nome || !$email || !$texto){
        $mensagem = "Dados Inválidos";
    }else{
        $stm = $conexao ->prepare('INSERT INTO contato (nome, email, texto) VALUES (:nome, :email, :texto)');

        $stm->bindParam("nome", $nome);
        $stm->bindParam("email", $email);
        $stm->bindParam("texto", $texto);
        $stm->execute();
        
        $mensagem = ">>>>>Mensagem enviada com sucesso<<<<<<";


        //limpar campos apos o form ser enviado
        $nome = "";
        $email = "";
        $texto = "";

    }

}



?>