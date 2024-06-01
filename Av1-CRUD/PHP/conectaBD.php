<?php
// Nome do arquivo do banco de dados SQLite
$dbFile = 'Alunos.SQL';
try {
    // Conectar ao banco de dados SQLite
    $pdo = new PDO('sqlite:' . $dbFile);
    // Configuração para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão aberta e OK<br>" ;

} catch (PDOException $e) {
    // Em caso de erro na conexão ou na consulta
    echo 'Erro: ' . $e->getMessage();
    echo ' conexão não aberta<br>';
}
?>
