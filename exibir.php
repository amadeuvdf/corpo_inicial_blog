<?php
include "sistema/controller/banco.php";
$id = $_GET['id'];
$arr_post = buscar_post($con, $id);

foreach ($arr_post as $key):
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <button onclick="history.back()">Voltar!</button>
  <h2><?php echo $key["titulo"];?></h2>
  <br>
    <?php echo $key['conteudo'];?>
    <br>
    <?php echo $key['autor'];?>
<?php endforeach;?>
  </body>
</html>