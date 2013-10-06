<?php
 
// datos para la coneccion a mysql
//define('DB_SERVER','200.54.168.133');
//define('DB_NAME','La_Tarta');
//define('DB_USER','root');
//define('DB_PASS','pepito.P789');

// datos para la coneccion a mysql
define('DB_SERVER','netbaucl.ipagemysql.com');
define('DB_NAME','latarta');
define('DB_USER','latarta');
define('DB_PASS','tuvieja.69');
 
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
 
?>