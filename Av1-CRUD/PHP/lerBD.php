<?php
include('conectaBD.php');

echo '<br>Lendo dados<br>';
$stmt = $pdo->query('SELECT * FROM aluno');
// Iterar sobre os resultados
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}
include('fechaBD.php')

?>