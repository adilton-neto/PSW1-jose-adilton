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

                          <div class="box4">


    <form action="dadoscad.php" method="post">
          

        
                 <h2 class= "nm"> Nome completo: </h2>
                  <input class="nome1" type="text" name="nome"><br>
                 
                

            <div class="email">
                <h2 class= "nm"> E-mail: </h2> 
                  <input class= "cxemail" type="text" name="email"><br>

                <h2 class= "nm"> confirmação de E-mail :</h2> 
                    <input class ="cxemail" type="text" name="confirmemail"><br>
            </div>

              <div class="email">
                 <h2 class= "nm"> senha: </h2>
                  <input class="cxemail" type="text" name="senha"><br>

                  <h2 class= "nm"> idade: </h2>
                  <input class="cxemail" type="text" name="idade"><br>
                
              </div>

              <div class="email">
                  <h2 class= "nm">  curso: </h2>
                  <input class="cxemail" type="text" name="curso"><br>

                  <h2 class= "nm">  instituto: </h2>
                 <input class="cxemail" type="text" name="instituto"><br>
                
            </div>  

            
                 
                <h2 class= "nm"> cidade: </h2>
                 <input class="cit" type="text" name="cit"><br>
                 
           



            
                 <button class= "bt1" type="submit">
               <b>Cadastrar</b>         
                 </button>
      



        </form>


    
     </div>







     <?php include ('footer.html'); ?>













    
</body>
</html>