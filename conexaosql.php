<?php
// Conexão com o banco de dados
$conn = new mysqli('localhost', 'username', 'password', 'hotel_reviews');

if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

// Seleciona as avaliações
$sql = "SELECT name, rating, comment, date FROM reviews ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Exibe as avaliações
  while ($row = $result->fetch_assoc()) {
    echo "<h3>" . htmlspecialchars($row["name"]) . " - " . $row["rating"] . " Estrelas</h3>";
    echo "<p>" . htmlspecialchars($row["comment"]) . "</p>";
    echo "<small>Avaliação feita em: " . $row["date"] . "</small><hr>";
  }
} else {
  echo "Nenhuma avaliação encontrada.";
}

$conn->close();

//-------------SQL----------------


//CREATE TABLE reviews (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR(100),
//email VARCHAR(100) NOT NULL,
//rating INT(1) NOT NULL,
//comment TEXT NOT NULL,
//date TIMESTAMP);

//------------------------------
?>