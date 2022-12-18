<?php
    if ($_GET['id']) {
        include_once ('openDB.php');
        $id = $_GET['id'];
        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $data = $conn->query("SELECT * FROM debiteur where id =$id");
            $data->setFetchMode(PDO::FETCH_ASSOC);
            $result = $data->fetch();
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
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
        <h1>bewerk</h1>
        <form method="post" action="../update.php">
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>"> <br> <br>
            <input type="text" name="email" value="<?php echo $result['email'] ?>" placeholder="email"> <br> <br>
            <input type="text" name="voornaam"value="<?php echo $result['voornaam'] ?>" placeholder="naam"> <br> <br>
            <input type="text" name="tussenvoegsel"value="<?php echo $result['tussenvoegsel'] ?>" placeholder="tussenvoegsel"> <br> <br>
            <input type="text" name="achternaam"value="<?php echo $result['achternaam'] ?>" placeholder="achternaam"> <br> <br>
            <input type="text" name="totaal"value="<?php echo $result['totaal'] ?>" placeholder="totaal">
            <br> <br>
            <input type="submit" value="bewerk">
        </form>
    </div>
</body>
</html>