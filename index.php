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
