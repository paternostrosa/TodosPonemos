<?php 
 require_once '../api/DbConexion.php';
 
$app->get('/roles/list', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    
    $db = new DbConexion();
    $con = $db->connect();
    $query="select idRol,titulo,descripcion, descripcioncorta, urlimagen from roles order by idRol";
    $result=$con->query($query) or die($con->error);
    //$roles = $result->fetch_all(); 
    $roles_array = array();
    while ($row = $result->fetch_assoc()) {
            $roles_array['idRol']= $row['idRol'];
            $roles_array['titulo']= $row['titulo'];
			$roles_array['descripcion']= $row['descripcion'];
			$roles_array['descripcioncorta']= $row['descripcioncorta'];
			$roles_array['urlimagen']= $row['urlimagen'];
			$response[] =$roles_array;
    }
  
	echoResponse(200, $response);
});

?>