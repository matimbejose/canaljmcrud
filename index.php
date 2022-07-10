<?php
include_once 'php_action/db_connect.php';

?>

<!DOCTYPE html>
 <html>
   <head>
       <title>Listar Clientes</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
       <div class="main">
           <h2>Lista de Clientes</h2>
           <table class="tabela">
               <thead>
               <th>Nome </th>
               <th>Email</th>
               <th>Cidade</th>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM  clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):

                    ?>
                <tr>
                  
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['cidade'];?></td>
                    <td><img src="img/icodelete.png" alt=""> <img src="img/icoedit.png" alt=""></td>
                </tr>
                <?php  
                endwhile;
                ?>
               
                </tbody>
           </table>
           <button class="btn">
               Adicionar Cliente 
           </button>

       </div>
   </body>  
 </html>