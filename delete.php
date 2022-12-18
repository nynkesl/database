<?php
    if ($_GET['id']) {
        include_once ('openDB.php');
        $id = $_GET['id'];
        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM debiteur WHERE id=$id";

            // use exec() because no results are returned
            $conn->exec($sql);
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
?>