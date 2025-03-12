<!DOCTYPE html>

<html>
<body>
    <?php
        $x = 15;
        $y = 7;
        echo "<p>Sum: " . ($x + $y) . "</p>";
        echo "<p>Difference: " . ($x - $y) . "</p>";
        echo "<p>Product: " . ($x * $y) . "</p>";
        echo "<p>Quotient: " . ($x / $y) . "</p>";
    ?>
    <?php
        echo "<h2> Exrcise 2 </h2>"
        $number = 85;
        if ($number % 2 == 0) {
            echo "Even";
        } else {
            echo "Odd";
        }
    ?>

    <?php
        for ($i = 1; $i % 3 == 0; $i++) {
            echo "<p>Fizz $i</p>";
        }
        for ($i = 1; $i % 5 == 0; $i++) {
            echo "<p>Buzz $i</p>";
        }
        for ($i = 1; $i % 3 == 0; $i++) {
            echo "<p>Fizz $i</p>";
        }
    ?>

</body>
</html

