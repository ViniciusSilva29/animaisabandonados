<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário - Abandono de Animais</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body align ="left">

    <div class="rodape">
        <h1>Cadastro!</h1>
        <nav>
            <ul>
                <a href="index.php">Inicio</a>
                <a href="#">Voltar</a>
            </ul>
        </nav>
    </div>

<form action="resultadoform.php" method="post">
    <h2>Denúncia de Abandono de Animais</h2>

    <label for="nome">Nome (opcional):</label>
    <input type="text" id="nome" name="nome">

    <label for="email">E-mail para contato:</label>
    <input type="email" id="email" name="email" required>

    <label for="tipo">Tipo de animal:</label>
    <select id="tipo" name="tipo">
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
        <option value="outro">Outro</option>
    </select>

    <label for="quantidade">Quantidade de animais:</label>
    <input type="number" id="quantidade" name="quantidade" min="1">

    <label for="local">Local do abandono:</label>
    <input type="text" id="local" name="local" required>

    <label for="descricao">Descrição da situação:</label>
    <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva o que aconteceu..." required></textarea>

    <label for="data">Data do ocorrido:</label>
    <input type="date" id="data" name="data">

    <button type="submit">Enviar Denúncia</button>
</form>

    <footer>
        <p>&copy; 2026 - Projeto Animais Abandonados</p>
    </footer>

</body>
</html>