<?php
function Datos()
{
    $json = file_get_contents("./data-1.json");
    return json_decode($json);
}
?>
