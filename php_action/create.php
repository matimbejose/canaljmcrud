<?php
//conexao com banco de dados
include_once 'db_connect.php';


if(isset($_POST['cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome'] );
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);

//inserindo os dados na base de dados
    $sql ="INSERT INTO clientes (nome, email, cidade) VALUES ('$nome' , '$email', '$cidade')";

//verificando se o camando eu certo
if(mysqli_query($connect, $sql)):
    echo "cadastrado com sucesso !";
    header('Location: ../index.php');
else:
    echo  "erro ao cadastrar ! ";
    header('Locatio: ../index.php');
endif;
endif;
?>
