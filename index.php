<!DOCTYPE html>

<html>
    <body>
        <?php
            echo "<h2>Exercise 1</h2>";
            $x = 15;
            $y = 7;
            echo "<p>Sum: " . ($x + $y) . "</p>";
            echo "<p>Difference: " . ($x - $y) . "</p>";
            echo "<p>Product: " . ($x * $y) . "</p>";
            echo "<p>Quotient: " . ($x / $y) . "</p>";
        ?>
        
        <?php
            echo "<h2>Exercise 2</h2>";
            $number = 85;
            
            if ($number % 2 == 0) {
                echo "<p>The number is Even</p>";
            } else {
                echo "<p>The number is Odd</p>";
            }
            
            if ($number > 0) {
                echo "<p>The number is Positive</p>";
            } elseif ($number < 0) {
                echo "<p>The number is Negative</p>";
            } else {
                echo "<p>The number is Zero</p>";
            }
        ?>
        
        <?php
            echo "<h2>Exercise 3</h2>";
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "<p>FizzBuzz $i</p>";
                } elseif ($i % 3 == 0) {
                    echo "<p>Fizz $i</p>";
                } elseif ($i % 5 == 0) {
                    echo "<p>Buzz $i</p>";
                }
            }
            
            $a = 0;
            $b = 1;
            $count = 0;
            while ($count < 10) {
                $fib = $a + $b;
                if ($fib % 2 == 0) {
                    echo "<p>Even Fibonacci: $fib</p>";
                }
                $a = $b;
                $b = $fib;
                $count++;
            }
        ?>
        
        <?php
        echo "<h2>Exercise 4</h2>";
        function greet($name) {
            return "Hello, " . $name . "!";
        }
            echo "<p>" . greet("Alice") . "</p>";
        
        function square($number) {
            return $number * $number;
        }
            echo "<p>The square of 4 is: " . square(4) . "</p>";
        ?>
        
        <h2>Exercise 5</h2>
        
        <form method="post">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
        </form>
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
                echo "<p>Hello, $name!</p>";
            }
        ?>
        
    </body>
</html>
