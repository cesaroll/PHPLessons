<?php

    include_once 'dbh.inc.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "INSERT INTO User (`UserName`, `Password`) Values('".$userName."', '".$password."');";

    mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=succcess");
