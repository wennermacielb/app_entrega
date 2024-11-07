<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anvy - Cadastro de Empresas</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="mascaras.js" defer></script> <!-- Importação do JavaScript externo -->
</head>
<body>
    <main class="margem">
        <h1>Cadastro de Empresa</h1>
        <form action="processa_cadastro.php" method="post">
            <!-- CPF/CNPJ -->
            <label for="cpf_cnpj">CPF/CNPJ:</label>
            <input type="text" id="cpf_cnpj" name="cpf_cnpj" required oninput="aplicarMascara(this, 'cpf_cnpj')">

            <!-- Nome/Nome Fantasia -->
            <label for="nome">Nome/Nome Fantasia:</label>
            <input type="text" id="nome" name="nome" required>

            <!-- Endereço (Rua) -->
            <label for="endereco">Endereço (Rua):</label>
            <input type="text" id="endereco" name="endereco" required>

            <!-- Número -->
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>

            <!-- Bairro -->
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>

            <!-- Cidade -->
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>

            <!-- Estado -->
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="">Selecione o Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <!-- Outros estados -->
            </select>

            <!-- CEP -->
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" required oninput="aplicarMascara(this, 'cep')">

            <!-- Botão de Enviar -->
            <button type="submit">Cadastrar Empresa</button>
        </form>
    </main>
</body>
</html>
