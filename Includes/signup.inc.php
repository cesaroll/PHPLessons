<?php

    include_once 'dbh.inc.php';

    $userName = mysqli_real_escape_string($conn, $_POST['userName']); // Avoid SQL Injection
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Avoid SQL Injection

    $sql = "INSERT INTO User (`UserName`, `Password`) Values(?, ?);";

    $stmt = mysqli_stmt_init($conn);

    // Prepare the preparede statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQl Error";        
    }
    else {

        // Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "ss", $userName, $password);

        // Run statement inside DB
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);


    }

    header("Location: ../index.php?signup=succcess");
