<?php

    include_once 'dbh.inc.php';

    $userName = mysqli_real_escape_string($conn, $_POST['userName']); // Avoid SQL Injection
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Avoid SQL Injection

    $sql = "INSERT INTO User (`UserName`, `Password`) Values('".$userName."', '".$password."');";

    mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=succcess");
