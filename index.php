<?php
    include_once('openDB.php');

    if ($_POST) {
        $email = $_POST['email'];
        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $totaal = $_POST['totaal'];

        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO debiteur (email, voornaam, tussenvoegsel, achternaam, totaal)
                    VALUES ('$email', '$voornaam', '$tussenvoegsel', '$achternaam', '$totaal')";
            // use exec() because no results are returned
            $conn->exec($sql);

            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>voeg toe</h1>
        <form method="post">
            <input type="text" name="email" placeholder="email"> <br> <br>
            <input type="text" name="voornaam" placeholder="naam"> <br> <br>
            <input type="text" name="tussenvoegsel" placeholder="tussenvoegsel"> <br> <br>
            <input type="text" name="achternaam" placeholder="achternaam"> <br> <br>
            <input type="text" name="totaal" placeholder="totaal">
            <br> <br>
            <button type="submit">voeg toe</button> <a href="get.php">bekijk gegevens</a>
        </form>
    </div>
</body>
</html>