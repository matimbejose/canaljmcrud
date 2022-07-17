<?php
include_once 'php_action/create.php';

?>

<!DOCTYPE html>
 <html>
   <head>
       <title>Cadastrar  Clientes</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/styleInsert.css">

   </head>
   <body>
       <div class="main">
           <h2>Cadastrar de Clientes</h2>

           <form  class="insert" action="php_action/create.php" method="POST">
            <h3>Nome</h3>
            <input  class="i" name="nome"  id="nome" placeholder="Nome completo" type="text">

            <h3>Email</h3>
            <input class="i" name="email" id="email" placeholder="Email do cliente" type="text">

            <h3>Cidade</h3>
            <input class="i" name="cidade" id="cidade"  placeholder="Cidade do cliemte" type="text"> <br>
            <button type="submit" class="btn" name="cadastrar">Adicionar Cliente</button>
            <a href="index.php">
             <input class="btn" type="button" value="Listar Clientes">
            </a>
           </form>
      

       </div>
   </body>  
 </html>