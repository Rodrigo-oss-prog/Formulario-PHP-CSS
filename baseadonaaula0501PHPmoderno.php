<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset = "utf-8">
    <title>Usando formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],


        input[type="submit"] {
            padding: 10px 20px;
            background-color: lightgray;
            color: black;
            border: none;
            border-bottom: 1px solid;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: dodgerblue;
        }

        p {
            color: red;
        }
    </style>
</head>

<body>

<h1>Aula PHP</h1>
<?php
    $texto = isset($_POST['texto']) ? $_POST['texto'] : '';
    $sobrenome = isset($_POST['sobrenome'])? $_POST['sobrenome'] : '';
    $idade = isset($_POST['idade'])? $_POST['idade'] : '';
    if($texto !== ''  && $sobrenome !== '' && $idade !== ''){
        echo "<p>Nome: $texto<br> Sobrenome: $sobrenome<br> Idade: $idade</p>";
    }else{
        echo "<p>Preencha os dados corretamente.</p>";
    }

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Limpa os espaços em branco do nome e sobrenome
        $nome = trim($_POST["nome"]);
        $sobrenome = trim($_POST["sobrenome"]);
        $idade = trim($_POST["idade"]);

        // Verifica se os nomes são válidos
        if (empty($nome) || empty($sobrenome) || empty($idade)) {
            echo "<p>Por favor, preencha todos os campos.</p>";
        } else {
            echo "<p>Nome: $nome</p>
                  <p>Sobrenome: $sobrenome</p>
                  <p>Idade: $idade</p>";
        }
    }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
      <label>
          <input type="text" name="texto" value= "" size = 10 required>
          <input type="text" name="sobrenome" value="" size = 10 required>
          <input type="text" name="idade" value="" size = 10 required>

      </label><br><br>

      <input type="submit" value="Enviar">
</form>
</body>
</html>

