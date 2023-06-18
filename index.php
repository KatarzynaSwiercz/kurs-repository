<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <style>
        * {font-family: sans-serif; text-aligne: center;}
    </style>
        <?php
            $var = 'Hello World';
            $var = 'Hi';
            define('CONSTANT', 'World' );
//            CONSTANT = 'Earth';
            echo "$var" . CONSTANT;

            echo '<br>';
            $text = "ABC";
            $num = 120;
            $float = 25.52;
            $bool = true;
            echo "$text, $num, $float,";
            var_dump($bool);
            echo '<br>';

            $textNum = "30";
//            echo $textNum + $num;
            echo '<br>';
            var_dump(is_numeric($textNum));

            $a = 'text';
            echo '<br><br>' . $$a;

        ?>
</body>
</html>