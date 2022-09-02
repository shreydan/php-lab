<!DOCTYPE html>
<html lang="en">

<body>
    <h1>for each array elt, /2 if even, *3 if odd</h1>
    <h2>add ?array=a1,a2,a3,... to url</h2>
    <h3>EG: http://localhost/php-lab/exp5/?array=1,2,3,4,5,a,b,4</h3>
    <h3>non-numericals are ignored hehe sike</h3>
    <?php
        $newarr = array();
        if(isset($_GET)) {
            $nums = explode(",", $_GET["array"]);
        }
        echo "<h3>OLD ARRAY:</h3>";
        foreach ($nums as $n) {
            if ((int)$n == $n) { // typecast check str->int valid
                echo "<div>$n</div>";
                if ($n % 2 == 0) {
                    $newarr[] = $n/2; // append
                }
                else {
                    $newarr[] = $n * 3;
                }
            }
        }
        echo "<h3>NEW ARRAY:</h3>";
        foreach ($newarr as $n) {
            echo "<div>$n</div>";
        }

    ?>
</body>
</html>