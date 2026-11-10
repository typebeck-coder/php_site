
<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Acesso negado. Tente novamente mais tarde.");
}

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$cidade = trim($_POST['cidade'] ?? '');
$idade = trim($_POST['idade'] ?? '');
$sexo = $_POST['sexo'] ?? '';
$observacao = trim($_POST['observacao'] ?? '');

if ($nome == '' || $email == '' || $cidade == '' ||
    $idade == '' || $sexo == '') {

    die("Campo incompleto. Preencha todos os campos obrigatórios.");
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("E-mail inválido.");
}



if (filter_var($idade, FILTER_VALIDATE_INT) === false) {
    die("A idade deve ser um número inteiro.");
}

$idade = (int) $idade;

if ($idade <= 0) {
    die("A idade deve ser maior que zero.");
}

if ($idade < 18) {
    die("Cadastro permitido apenas para maiores de 18 anos.");
}


if (!in_array($sexo, ['Feminino', 'Masculino', 'Outro'], true)) {
    die("Opção de sexo inválida.");
}


$nome = mb_convert_case($nome, MB_CASE_TITLE, 'UTF-8');

$cidade = mb_convert_case($cidade, MB_CASE_TITLE, 'UTF-8');


$nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');

$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

$cidade = htmlspecialchars($cidade, ENT_QUOTES, 'UTF-8');

$sexo = htmlspecialchars($sexo, ENT_QUOTES, 'UTF-8');

$observacao = htmlspecialchars($observacao, ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmação de Cadastro</title>
</head>

<body>

    <h2>Cadastro realizado com sucesso!</h2>

    <h3>Dados cadastrados:</h3>

    <p><strong>Nome completo:</strong> <?php echo $nome; ?></p>

    <p><strong>E-mail:</strong> <?php echo $email; ?></p>

    <p><strong>Cidade:</strong> <?php echo $cidade; ?></p>

    <p><strong>Idade:</strong> <?php echo $idade; ?></p>

    <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>

    <p><strong>Observações:</strong> <?php echo $observacao; ?></p>

    <br>

    <a href="index.php">Voltar ao formulário</a>

</body>
</html>
