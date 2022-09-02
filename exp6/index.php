<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 1.5rem;
        }
    </style>
</head>
<body>
    <h1>add ?countries=a,b,c&cities=d,e,f after localhost/php-lab/exp6/ to get table</h1>
    <?php
        $country_city = array();
        if(isset($_GET)) {
            $countries = explode(",",$_GET["countries"]);
            $cities = explode(",",$_GET["cities"]);
            if (count($countries) != count($cities)) {
                echo "missing values";
            }
            else {
                for ($i=0;$i<count($countries);$i++) {
                    $country_city[trim($countries[$i])] = trim($cities[$i]);
                }
                echo "<table><tr><th>country</th><th>city</th></tr>";
                foreach($country_city as $country => $city) {
                    echo "<tr><td>$country</td><td>$city</td></tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>