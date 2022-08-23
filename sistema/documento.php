<!DOCTYPE html>
<html>
<head>
  <script src='https://cdn.tiny.cloud/1/ybvpkvqonxd2l64n60dy9bd3lbiuk6938uky003mkf26vz2z/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script src="js/tiny.js"></script>
</head>
<body>
    <h1>Inserção de dados para documento</h1>

  <form method="post" action="controller/cadastro.php">
      <label for="titulo">Titulo do POST</label><br>
      <input type="text" id="titulo" name="titulo"><br><br>
    <textarea id="mytextarea" name="mytextarea">Inserir o texto aqui</textarea><br>
      <label for="autor">Autor do POST</label><br>
      <input type="text" id="autor" name="autor" ><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
