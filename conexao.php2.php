<?php
$servername = "localhost"; // ou o endereço do seu servidor de banco de dados
$username = "host";  // substitua pelo seu usuário do MySQL
$password = "";     // substitua pela sua senha do MySQL
$dbname = "tbl_banco_dados";          // nome do banco de dados existente

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão realizada com sucesso!<br>";
}

// Encerrando a conexão (opcional, você pode manter a conexão aberta)
$conn->close();
?>