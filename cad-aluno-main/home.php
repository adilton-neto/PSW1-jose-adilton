<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

         <?php include ('header.html'); ?>


                        <div class="box3">


    <div class="formulario">
        
        <form action="mostraaluno.php" method="post">


        <div class="login">
               <h2> Login:</h2>
                 <input class="cx1" type="text" name="login"><br>
        </div>

        <div class="senha">
                 <h2>Senha:</h2>    
                 <input class="cx2" type="text" name="senha"><br>

         </div>
         
         <div class="botao">

          <button class="bt" type="submit">
          <b>fazer login</b>         
          </button> 

          </div>

          <div class="criar">

Não tenho conta?<a href="http://localhost//jose-adilton-2aii/cadaluno.php">criar conta</a>

</div>  

       </form>    
       
        
         
       
    </div>
                    
                  

</div>



<?php include ('footer.html'); ?>


    
</body>
</html>