<?php

require_once __DIR__ . "/functions.php";

if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $transformedName = transformName($name);
    filter_var($transformedName, FILTER_UNSAFE_RAW);
    echo $transformedName;
}
