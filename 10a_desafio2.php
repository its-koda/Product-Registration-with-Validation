<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <form action="" method="post">
        <h2>Cadastro de Produtos</h2>

        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01">

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = trim($_POST['nome'] ?? '');
        $preco = $_POST['preco'] ?? '';

        // Validações antes da conexão/inserção
        if (empty($nome) || $preco === '') {
            // Espaços vazios
            echo "<p id='msg' style='color: red;'>Erro: Todos os espaços devem ser preenchidos</p>";

        } else if (!is_numeric($preco)) {
            //  O valor do preço não é numérico
            echo "<p id='msg' style='color: red;'>Erro: O valor do Preço deve ser numérico</p>";

        } else if ($preco <= 0) {
            // O valor do preço é negativo ou zero
            echo "<p id='msg' style='color: red;'>Erro: O preço deve ser um número positivo</p>";

        } else {
            // Conecta com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exercicio";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // Insere o registro no BD usando Prepared Statement para segurança contra SQL Injection
            $stmt = $conn->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
            $stmt->bind_param("sd", $nome, $preco);

            if ($stmt->execute()) {
                echo "<p id='msg' style='color: Darkgreen;'>Produto cadastrado com sucesso!</p>";
            } else {
                // Erro do BD
                echo "<p id='msg' style='color: red;'>Erro: Não foi possível fazer o cadastro</p>";
            }

            // Fecha a declaração e a conexão
            $stmt->close();
            $conn->close();
        }

        // Ocultar a mensagem após 5 segundos com a função setTimeout do Javascript
        echo "
        <script>
            setTimeout(function() {
                var msg = document.getElementById('msg');
                if (msg) msg.style.display = 'none';
            }, 5000);
        </script>
        ";
    }
    ?>
</body>
</html>