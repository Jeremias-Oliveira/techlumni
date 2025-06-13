<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Página | Cadastro</title>
</head>
<body>
  <div class="formulario">
    <h2>Cadastro</h2>
  
    <form id="formCadastro" method="POST">
        <select id="tipo" name="tipo" required>
          <option value="" disabled selected hidden>Selecione...</option>
          <option value="aluno">Aluno</option>
          <option value="professor">Professor</option>
          <option value="coordenador">Coordenador</option>
        </select><br><br>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required><br><br>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>
      
        <button type="submit">Cadastrar</button>
      </form>
      <p>Já tem Conta?<a href="index.php">Login</a>.</p>
    </div>
      <script>
        document.getElementById("formCadastro").addEventListener("submit", function(event) {
          event.preventDefault();
      
          const tipo = document.getElementById("tipo").value;
          const email = document.getElementById("email").value;
          const senha = document.getElementById("senha").value;
      
          if (!tipo) {
            alert("Por favor, selecione um tipo de usuário.");
            return;
          }
          // Salva os dados temporariamente
          sessionStorage.setItem("email", email);
          sessionStorage.setItem("senha", senha);
          // Redireciona
          window.location.href = `cadastro_${tipo}.php`;
        });
      </script>
  </body>
</html>