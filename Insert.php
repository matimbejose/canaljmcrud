<?php
include_once 'php_action/db_connect.php';
?>

<!DOCTYPE html>
 <html>
   <head>
       <title>Cadastrar Clientes</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/styleInser.css">
   </head>
   <body>
       <div class="main">
           <h2>Cadastrar Clientes</h2>

           <form class="insert" method="post">
           <h3>Nome</h3>
            <input class="i" name="nome" type="text" id="nome" placeholder="Nome completo">
            <h3>Email</h3>
            <input class="i" name="login" type="email" id="login" placeholder="Email">
            <h3>Cidade</h3>
            <input class="i" name="senha" type="text" id="senha" placeholder="Cidade"><br>
        </form>
        <a  href="index.php">
        <input class="btn" type="button" value="Listar Clientes">
        </a>
        <a  href="index.php">
        <input class="btn" type="button" value="Cadastrar">
        </a>

       </div>
   </body>  
 </html>