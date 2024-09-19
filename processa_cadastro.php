<?php
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP
$password = ""; // senha padrão do XAMPP, geralmente é vazia
$dbname = "matricula - aluno"; // substitua pelo nome do seu banco de dados

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Coletando dados do formulário
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento_aluno = $_POST['data_nascimento_aluno'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$nome_mae = $_POST['nome_mae'];
$data_nascimento_mae = $_POST['data_nascimento_mae'];
$profissao_mae = $_POST['profissao_mae'];
$telefone_trabalho_mae = $_POST['telefone_trabalho_mae'];
$celular_mae = $_POST['celular_mae'];
$nome_pai = $_POST['nome_pai'];
$data_nascimento_pai = $_POST['data_nascimento_pai'];
$profissao_pai = $_POST['profissao_pai'];
$telefone_trabalho_pai = $_POST['telefone_trabalho_pai'];
$celular_pai = $_POST['celular_pai'];
$responsavel_financeiro = $_POST['responsavel_financeiro'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$celular_responsavel = $_POST['celular_responsavel'];
$data_previsao_pagamento = $_POST['data_previsao_pagamento'];

// Inserindo dados na tabela
$sql = "INSERT INTO ficha_aluno (nome_aluno, data_nascimento_aluno, endereco, numero, cep, telefone, cidade, estado,
    nome_mae, data_nascimento_mae, profissao_mae, telefone_trabalho_mae, celular_mae,
    nome_pai, data_nascimento_pai, profissao_pai, telefone_trabalho_pai, celular_pai,
    responsavel_financeiro, cpf, rg, celular_responsavel, data_previsao_pagamento) 
VALUES ('$nome_aluno', '$data_nascimento_aluno', '$endereco', $numero, '$cep', '$telefone', '$cidade', '$estado',
    '$nome_mae', '$data_nascimento_mae', '$profissao_mae', '$telefone_trabalho_mae', '$celular_mae',
    '$nome_pai', '$data_nascimento_pai', '$profissao_pai', '$telefone_trabalho_pai', '$celular_pai',
    '$responsavel_financeiro', '$cpf', '$rg', '$celular_responsavel', '$data_previsao_pagamento')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>