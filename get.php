<?php
    include_once('openDB.php');

    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get all comments
        $stmt = $conn->prepare("SELECT * FROM debiteur");
        $stmt->execute();
        $results = $stmt->fetchAll();

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
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
    <h1>alle gegevens</h1>
    <a href="index.php">terug</a>
    <?php foreach ($results as $result) { ?>
        <p>email: <?php echo $result['email']?> <br>
        voornaam: <?php  echo $result['voornaam'] ?> <br>
        tussenvoegsel: <?php  echo $result['tussenvoegsel'] ?> <br>
        achternaam: <?php  echo $result['achternaam'] ?> <br>
        totaal: €<?php  echo $result['totaal'] ?> <br>
        <form action='delete.php?id="<?php echo $result['id'] ?>"' method="post"><button type="submit" name="submit" value="<?php echo $result['id'] ?>">Verwijder</button></form>
        <form method="post"><a href="bewerkdata.php/?id=<?php echo $result['id'] ?>" value="<?php echo $result['id'] ?>">update</a></form>
        <?php } ?>
</body>
</html>