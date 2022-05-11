<?php  

// conectar a la base de datos
$con = new mysqli('mysql_db', 'root', 'root', 'mysql');

if ($con) {
    echo "CONNECTED !!";
}
