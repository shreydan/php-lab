<!DOCTYPE html>
<html>
<body>
    <h3>to get factorial add ?n=value to the url</h3>
    <h3>Example: http://localhost/php-lab/exp3/?n=3</h3>

    <h1>factorial using while loop</h1>
    <?php
        $n = $_GET["n"];
        if(isset($n)) {
            $copy = $n;
            $f=1;
            while ($n!=0) {
                $f *= $n;
                $n--;
            }
            echo "<h4>The factorial of $copy = $f</h4>";
        }
        else {
            echo "modify the url :)";
        }
        
    ?>
</body>
</html>