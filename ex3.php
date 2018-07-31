<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$t = date("H");

if ($t < "20") {
    echo "choose your favt actor:";
}
$favactor = "Vijay";

switch ($favactor) {
    case "Ajith":
        echo "Your favorite actor is Ajith!";
        break;
    case "Surya":
        echo "Your favorite actor is Surya!";
        break;
    case "Vijay":
        echo "Your favorite actor is Vijay!";
        break;
    default:
        echo "Your favorite actor is neither Ajith, Surya, nor Vijay!";
}
        ?>
    </body>
</html>

