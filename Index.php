<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="GET">
        <input type="text" name="person" id="person">
        <button type="submit">Submit</button>
    </form>

    <?php
        // Get Variable from Form using GET
        $name = $_GET['person']; // string variable
        echo "Hi ".$name; // concatenate strings

        $phrase = "Hello World!!";
        echo "<br/>".$phrase;
        echo "<br/>Length: ". strlen($phrase);
        echo "<br/>Word Count: ". str_word_count($phrase);

        echo "<br/>".str_replace("Hello", "Hi", $phrase);
    ?>
</body>
</html>