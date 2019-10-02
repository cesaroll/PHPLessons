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
        
        newCalc(100);
        newCalc(200);

        function newCalc($x){
            $newnr = $x * 0.75;
            echo "<br/>Here is 75% of ".$x." : ".$newnr;
        }

        

    ?>

</body>
</html>