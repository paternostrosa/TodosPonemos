<?php

class DbConexion {

    function construct() {        
    }

    function connect() {
        include_once 'Config.php';
        $con = new mysqli(HOST, USERNAME,PASS, DBNAME);
		$con->set_charset('utf8');
        
        if (mysqli_connect_errno()) {
            echo "Error al conectar: " . mysqli_connect_error();
        }

        return $con;
    }

}

?>
