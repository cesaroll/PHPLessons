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
    
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="userName" placeholder="User Name" >
        <br/>
        <input type="password" name="password" placeholder="Password">
        <br/>
        <!--<input type="submit" value="submit">-->
        <button type="submit" name="submit">Sign up</button>
    </form>


    <?php
    
    $sql = "SELECT * FROM User;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br/>" . $row['UserName'];
        }
    }

    
    ?>

</body>
</html>