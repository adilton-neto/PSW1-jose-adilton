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

<div class="boxmostra">

<?php 

$login  = $_POST['login']; 
$senha = $_POST['senha'];

echo "Seu login : $login"; 

 echo "Sua senha : $senha";

?>
</div>


<?php include ('footer.html'); ?>




























    
</body>
</html>