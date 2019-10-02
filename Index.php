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
        $msgs = array("Hola", "Cesar", "como", "estas?");

        $len = count($msgs);

        echo "<br/>";
        
        for($i = 0; $i < $len; $i++){
            echo $msgs[$i]." ";
        }
        
        echo "<br/>";

        foreach($msgs as $msg){
            echo $msg." ";
        }
    ?>

</body>
</html>