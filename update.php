<?php
    if ($_POST['id']) {
        include_once ('openDB.php');
        $id = $_POST['id'];
        $email = $_POST['email'];
        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $totaal = $_POST['totaal'];

        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to update a record
            $sql = "UPDATE debiteur SET email=?, voornaam=?, tussenvoegsel=?, achternaam=?, totaal=? WHERE id=$id";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            $stmt->execute([$email, $voornaam, $tussenvoegsel, $achternaam, $totaal]);

            header("Location: get.php");
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
?>