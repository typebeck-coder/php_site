
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Contato</title>
</head>

<body>

    <h2>Cadastro de Contato</h2>

    <form action="processa.php" method="POST" id="dados" name="dados">

        <label for="nome">Nome completo:</label>
        <input type="text" name="nome" id="nome"
               placeholder="Digite seu nome completo"
               maxlength="100" required>
        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email"
               placeholder="Digite seu e-mail"
               maxlength="100" required>
        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade"
               placeholder="Digite sua cidade"
               minlength="2" required>
        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"
               placeholder="Digite sua idade"
               step="1" required>
        <br><br>

        <label>Sexo:</label>

        <label>
            <input type="radio" name="sexo" value="Feminino" required>
            Feminino
        </label>

        <label>
            <input type="radio" name="sexo" value="Masculino">
            Masculino
        </label>

        <label>
            <input type="radio" name="sexo" value="Outro">
            Outro
        </label>

        <br><br>

        <label for="observacao">Observações:</label>
        <input type="text" name="observacao" id="observacao"
               placeholder="Digite sua observação">

        <br><br>

        <button type="submit" name="btn">Enviar</button>

    </form>

</body>
</html>
