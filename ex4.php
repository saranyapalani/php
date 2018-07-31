<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $bikes = array("r15","ktm","royal enfield","pulsar");
var_dump($bikes);
$bikes = array("r15", "ktm", "royal enfield","pulsar");
$arrlength = count($bikes);

for($x = 0; $x < $arrlength; $x++) {
    echo $bikes[$x];
    echo "<br>";
}
        $x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
        function writeMsg() {
    echo "Hello!";
}

writeMsg(); 

        ?>
    </body>
</html>

