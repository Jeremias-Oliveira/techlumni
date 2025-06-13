<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro | Coordenador</title>
</head>
<body>
  <div class="formulario">
    <h2>Cadastro de Coordenador</h2>
    <form action="cadastro_coordenador.php" method="POST">
      <input type="text" name="nome_completo" placeholder="Nome completo" required><br><br>
      <input type="date" name="data_nascimento" required><br><br>
      <input type="text" name="departamento" placeholder="Departamento"><br><br>
      <!-- Endereço -->
      <input type="text" name="logradouro" placeholder="Rua, Av, etc." required><br><br>
      <input type="text" name="numero" placeholder="Número" required><br><br>
      <input type="text" name="bairro" placeholder="Bairro" required><br><br>
      <input type="text" name="cep" placeholder="CEP" required><br><br>
      <input type="text" name="cidade" placeholder="Cidade" required><br><br>
      <input type="text" name="estado" placeholder="Estado" required><br><br>
      <!-- Telefone -->
      <input type="tel" name="telefone" placeholder="Telefone" required><br><br>
      <input type="email" name="email" placeholder="E-mail" required><br><br>
      <input type="password" name="senha" placeholder="Senha" required><br><br>
  
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