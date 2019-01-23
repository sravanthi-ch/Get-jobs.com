<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'sravanthi');
   define('DB_PASSWORD', '1234');
   define('DB_DATABASE', 'get_job');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   echo "connected";
?>