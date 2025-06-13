<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    // Dados do formulário
    $nome = $_POST['nome_completo'];
    $data_nasc = $_POST['data_nascimento'];
    $pai = $_POST['pai'];
    $mae = $_POST['mae'];
    $genero = $_POST['genero'];
    $matricula = $_POST['matricula'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conn, "INSERT INTO aluno(nome_completo, data_nascimento, pai, mae, genero, matricula, email, senha) 
                                  VALUES ('$nome','$data_nasc','$pai','$mae','$genero','$matricula','$email','$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro | Aluno</title>
</head>
<body>
  <div class="formulario">

  

    <h2>Cadastro de Aluno</h2>
    <form action="cadastro_aluno.php" method="POST">
      <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome completo" required><br><br>
      <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>
      <input type="text" name="pai" id="pai" placeholder="Nome do pai"><br><br>
      <input type="text" name="mae" id="mae" placeholder="Nome da mãe"><br><br>
      <input type="text" name="genero" id="genero" placeholder="Gênero"><br><br>
      <input type="text" name="matricula" id="matricula" placeholder="Matrícula"><br><br>
      <!-- Endereço -->
      <input type="text" name="logradouro" id="logradouro" placeholder="Rua, Av, etc." required><br><br>
      <input type="text" name="numero" id="numero" placeholder="Número" required><br><br>
      <input type="text" name="bairro" id="bairro" placeholder="Bairro" required><br><br>
      <input type="text" name="cep" id="cep" placeholder="CEP" required><br><br>
      <input type="text" name="cidade" id="cidade" placeholder="Cidade" required><br><br>
      <input type="text" name="estado" id="estado" placeholder="Estado" required><br><br>
      <!-- Telefone -->
      <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required><br><br>
      <input type="email" name="email" id="email" placeholder="E-mail" required><br><br>
      <input type="password" name="senha" id="senha" placeholder="Senha" required><br><br>
  
      <button type="submit">Cadastrar</button>
    </form>
    <div class="voltar"><p><a href="cadastro.php">Voltar</a></p></div>
  </div>
    <script>
        // Preenche automaticamente os campos com os dados do sessionStorage
        document.addEventListener("DOMContentLoaded", function () {
          const email = sessionStorage.getItem("email");
          const senha = sessionStorage.getItem("senha");
      
          if (email && senha) {
            document.querySelector('input[name="email"]').value = email;
            document.querySelector('input[name="senha"]').value = senha;
          }
        });
      </script>
  </body>
</html>