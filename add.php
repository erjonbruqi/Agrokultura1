<?php

    include_once('config.php'); 

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, surname, username,password) VALUES (:name, :surname, :username, :password)";
        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':surname', $surname);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':password', $password);

        $insertSql->execute();

        echo "Data saved successfully ...<br>";
        // Redirect to a specific page after successful data insertion
        header("Location: login.php");
        exit(); // Ensure script stops after redirection
    }

    ?>