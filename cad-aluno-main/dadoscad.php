<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php include ('header.html'); ?>

<div class="boxhome">

<?php

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $confirmemail = $_POST['confirmemail'];
   $senha = $_POST['senha'];
   $idade = $_POST['idade'];
   $curso = $_POST['curso'];
   $instituto = $_POST['instituto'];
   $cit = $_POST['cit'];

   echo "nome: $nome";
   echo "email: $email";
   echo "email de confirmação: $confirmemail";
   echo "senha: $senha";
   echo "idade: $idade";
   echo "curso: $curso";
   echo "instituto: $instituto";
   echo "cidade: $cit";
   

?>
</div>






  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
   Editar
  </button>



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Editar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
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






      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">salvar</button>
      </div>

    </div>
  </div>
</div>















<?php include ('footer.html'); ?>



















</body>
</html>