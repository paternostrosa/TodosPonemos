<?php  

    define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'paternostrosa');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'todosponemos');
   
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>