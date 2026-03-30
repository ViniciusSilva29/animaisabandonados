<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Denúncia</title>
    <link rel="stylesheet" href="assets/css/resultadoform.css">
</head>
<body>

<div class="container">
    <h2>AdEnviada com Sucesso!</h2>
    <p class="sucesso">Obrigado por contribuir com a proteção dos animais 🐾</p>

    <h3>Resumo da sua denúncia:</h3>

    <p><strong>Nome:</strong> <?php echo $_POST['nome'] ?? 'Não informado'; ?></p>
    <p><strong>E-mail:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Tipo de animal:</strong> <?php echo $_POST['tipo']; ?></p>
    <p><strong>Quantidade:</strong> <?php echo $_POST['quantidade']; ?></p>
    <p><strong>Local:</strong> <?php echo $_POST['local']; ?></p>
    <p><strong>Descrição:</strong> <?php echo $_POST['descricao']; ?></p>
    <p><strong>Data:</strong> <?php echo $_POST['data']; ?></p>

    <br>
    <p>As informações foram registradas e poderão ser encaminhadas para as autoridades responsáveis.</p>

    <a href="index.html">Voltar ao formulário</a>
</div>

</body>
</html>