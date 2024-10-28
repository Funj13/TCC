<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Hotel Pinguim</title>
   
</head>
<body>

    <h1>Deixe sua Avaliação do Quarto</h1>

    <form action="submit_review.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="rating">Nota:</label>
        <div class="rating">
            <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 estrelas">&#9733;</label>
            <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 estrelas">&#9733;</label>
            <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 estrelas">&#9733;</label>
            <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 estrelas">&#9733;</label>
            <input type="radio" id="star1" name="rating" value="1" required><label for="star1" title="1 estrela">&#9733;</label>
        </div>

        <label for="comment">Comentário:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <input type="submit" value="Enviar Avaliação">
    </form>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        label {
            font-weight: bold;
            color: #34495e;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 2em;
            color: #ccc;
            cursor: pointer;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #f1c40f;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .reviews {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .reviews h3 {
            color: #2980b9;
        }

        .reviews p {
            font-size: 16px;
            color: #555;
        }

        .reviews small {
            color: #999;
        }
    </style>
</body>
</html>

  <?php

  include 'conexaosql.php'; 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $rating = $_POST['rating'];
    $comment = htmlspecialchars($_POST['comment']);
    $date = date('Y-m-d H:i:s');

    // Conexão com o banco de dados
    $conn = new mysqli('localhost', 'username', 'password', 'hotel_reviews');
    
    // Verifica conexão
    if ($conn->connect_error) {
      die("Erro na conexão: " . $conn->connect_error);
    }

    // Insere os dados na tabela de avaliações
    $sql = "INSERT INTO reviews (name, email, rating, comment, date) VALUES ('$name', '$email', '$rating', '$comment', '$date')";

    if ($conn->query($sql) === TRUE) {
      echo "Avaliação enviada com sucesso!";
    } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>
