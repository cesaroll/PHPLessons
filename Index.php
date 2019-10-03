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
    echo "<br/>".$_POST['name'];
    ?>

    <form action="" method="POST">
        <input type="hidden" name="name" value="Cesar">
        <button type="submit">Press Me!</button>
    </form>
    
    
</body>
</html>