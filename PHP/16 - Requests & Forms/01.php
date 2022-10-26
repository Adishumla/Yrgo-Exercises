<?php
//uppgift 1
print_r($_GET);
//uppgift 2/3
if (isset($_GET['name'], $_GET['age'])) {
    echo "Hello " . $_GET['name'] . " you are " . $_GET['age'] . " years old";
}
