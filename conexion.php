<?php
 
// datos para la coneccion a mysql
//define('DB_SERVER','localhost');
//define('DB_NAME','La_Tarta');
//define('DB_USER','root');
//define('DB_PASS','');

// datos para la coneccion a mysql
define('DB_SERVER','200.54.168.133');
define('DB_NAME','La_Tarta');
define('DB_USER','root');
define('DB_PASS','pepito.P789');
 
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
 
?>