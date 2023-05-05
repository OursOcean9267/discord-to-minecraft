<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSCTOMC</title>
</head>
<body>
    <P>SUS</P>
</body>
</html>

<?php
if ($_GET('author') == "js") {
    $array = array(
        "commande" => $_GET("commande"),
        "username" => $_GET("username"),
        "options" => json_decode($_GET("options")),
        "cmdid" => $_GET("cmdid"),
    );
    file_put_contents("discordToMinecraft.json", json_encode($array));
}
?>
