<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    $data = "denisel";

    // Create a template
    $sql = "SELECT * FROM User WHERE UserName = ?;";

    $stmt = mysqli_stmt_init($conn);
    
    // Prepare the preparede statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Statement failed";
    }
    else {
        // Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, 's', $data);

        // Run statement inside DB
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_assoc($result)){
            echo $row["UserName"] . "<br/>";
        }

        mysqli_stmt_close($stmt);
    }

    

?>
    
</body>
</html>