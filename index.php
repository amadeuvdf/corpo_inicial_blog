<?php
include "sistema/controller/banco.php";
 $allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
 $allowedTags.='<li><ol><ul><span><div><br><ins><del>';
 
// Should use some proper HTML filtering here.

  if(isset($_POST['mytextarea']) && $_POST['mytextarea'] != ''){
    $mensagem = $_POST['mytextarea'];
  } else {
    $sContent = '<p>Comece logo a escrever...</p>';
    $mensagem = '';
  }

  if($mensagem != '') {
    $sContent = strip_tags(stripslashes($mensagem),$allowedTags);
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <h4>Links de acesso:</h4>
  <!-- Montar um Header -->
  <a href="sistema/documento.php">Fazer um post</a>
  <br>
  <?php 
    $arr_posts = buscar_posts($con);
    echo "<br>";

    foreach ($arr_posts as $key):
  ?>
  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
            <a href="exibir.php?id= <?php echo $key['idposts']; ?>"></a>
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $key['titulo']?></h5>
            <p class="card-text">Aqui pode vir um resumo do assunto</p>
            <a href="exibir.php?id= <?php echo $key['idposts']; ?>" class="btn btn-primary">Button</a>
          </div>
      </div>
    </div>
  </div>
  <br>
  <!--Montar uma paginação-->
  <?php endforeach; ?>
  </body>
</html>