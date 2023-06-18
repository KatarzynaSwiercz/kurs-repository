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
            $text = "ABCD";
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

        <h3>Operatory arytmetyczne odc.3</h3>
        <?php
            $a = 10;
            $b = 7;
            echo "a = $a, b = $b <br>";
            echo "<br>Dodawanie = " . ($a + $b);
            echo "<br>Odejmowanie = " . ($a - $b);
            echo "<br>Mnożenie = " . ($a * $b);
            echo "<br>Dzielenie = " . round($a / $b, 2);
            echo "<br>Reszta z dzielenia = " . ($a % $b);

            echo "<br><br>Kolejność = " . ((2 + 2) * 2);

//          $a = $a + 10;
            $a += 1;
            echo "<br><br> a = $a";

            $a++;
            echo "<br><br>a = " . ++$a;
            echo "<br><br>a = " . --$a;

            echo "<br><br>Potegowanie = " . pow(2,3);
            echo "<br>Pierwiastkowanie = " . sqrt(9);

        ?>

        <h3>Operatory porównania odc.4</h3>
        <?php
            $a = 5;
            $b = 10;

            echo "a = $a, b = $b <br>";

            echo "<br>$a == $b : ";
            var_dump($a == $b);

            echo "<br>$a != <> $b : ";
            var_dump($a <> $b);

            echo "<br>$a <  $b : ";
            var_dump($a < $b);

            echo "<br>$a <=  $b : ";
            var_dump($a <= $b);

            echo "<br>$a >  $b : ";
            var_dump($a > $b);

            echo "<br>$a >=  $b : ";
            var_dump($a >= $b);

            echo "<br><br>$a ===  $b : ";
            var_dump($a === $b);

            echo "<br><br>$a !==  $b : ";
            var_dump($a !== $b);

        ?>

        <h3>Operatory logiczne odc.5</h3>
        <?php
            $a = false;
            $b = false;

            echo "a =";
            var_dump($a);
            echo "b =";
            var_dump($b);

            echo '<br><br>OR : ';
            var_dump($a or $b);

            echo '<br>AND : ';
            var_dump($a and $b);

            echo '<br>OR || : ';
            var_dump($a || $b);

            echo '<br>AND && : ';
            var_dump($a && $b);

            echo '<br>XOR : ';
            var_dump($a xor $b);

            echo '<br>NOT : ';
            var_dump(!$a);

            echo '<br><br>Wynik = ';
            var_dump(true || false && false);
            ?>


    <h3>Instrukcje warunkowe odc.6</h3>
    <form action="index.php" method="get">
        <input type="number" name="num" id="">
        <input type="submit" value="Wyślij">
        </form>

        <?php
            if(isset($_GET['num']) and is_numeric($_GET['num']))
            {
                $a = $_GET['num'];
                echo "<br>Liczba = $a";

                if($a % 2 == 0)
                {
                    echo '<br><br>Parzysta';
                }
                else
                {
                    echo '<br>Nieparzysta';
                }

                if($a > 0)
                {
                    echo '<br>Większa od zera';
                }
                elseif($a ==0)
                {
                    echo '<br>Róna zero';
                }
                else
                {
                    echo '<br>Mniejsza od zera';
                }

                echo $a % 3 == 0 ? '<br>Podzielna przez 3.' :
                    '<br>Nie podzielna przez 3.';
            }
            else
                echo '<br>Wypełnij pole!';

        ?>
</body>
</html>