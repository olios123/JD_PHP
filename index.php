<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD</title>
</head>
<body>
    
    <?php
        // 1
        $number = 5;
        if ($number % 2 == 0)
        {
            echo "Liczba " . $number . " jest parzysta <br>";
        }
        else
        {
            echo "Liczba " . $number . " jest nieparzysta <br>";
        }

        // 2
        $number1 = 10;
        $number2 = 5;
        if ($number1 % $number2 == 0)
        {
            echo "Liczba " . $number1 . " jest podzielna przez liczbę " . $number2 . "<br>";
        }
        else
        {
            echo "Liczby nie są podzielne przez siebie <br>";
        }

        // 3
        $n = 20;
        if (($n < 10 && $n > 1) || ($n < 21 && $n > 17))
        {
            echo "Liczba " . $n . " należy do przedziału <1,10> lub <17,21> <br>";
        }
        else
        {
            echo "Liczba " . $n . " nie znajduje się w przedziale <1,10> lub <17,21> <br>";
        }

        // 4
        $lb = 20;
        if ($lb == 100)
        {
            echo "Liczba jest równa 100 <br>";
        }
        else if ($lb > 0)
        {
            echo "Liczba " . $lb . " jest większa od zera <br>";
        }
        else if ($lb < 0)
        {
            echo "Liczba " . $lb . " jest mniejsza od zera <br>";
        }
        else if ($lb == 0)
        {
            echo "Liczba " . $lb . " jest równa zero <br>";
        }

        // 5
        $age = 13;
        if ($age < 11)
        {
            echo "Dziecko <br>";
        }
        else if ($age >= 11 && $age <= 17)
        {
            echo "Nastolatek <br>";
        }
        else if ($age > 17)
        {
            echo "Dorosły <br>";
        }
    ?>

</body>
</html>
