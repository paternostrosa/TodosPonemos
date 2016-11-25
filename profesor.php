<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesores - Todos ponemos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<!-- Bootstrap Core CSS -->
    <link href="css/menulateral.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Todos ponemos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="acercade.html">Acerca de</a>
                    </li>
                    
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profesores
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a>
                    </li>
                    <li class="active">Profesores</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://imagenes.catholic.net/imagenes_db/a57e18_profesora-dando-clase.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="padres.php">
							<i class="glyphicon glyphicon-ok"></i>
							 Padres</a>
						</li>
						<li>
							<a href="cuidador.php">
							<i class="glyphicon glyphicon-ok"></i>
							Cuidadores </a>
						</li>
						<li>
							<a href="profesor.php" >
							<i class="glyphicon glyphicon-ok"></i>
							Profesores </a>
						</li>
						<li>
							<a href="madre comunitaria.php">
							<i class="glyphicon glyphicon-ok"></i>
							Madres comunitarias </a>
						</li>
						<li>
							<a href="recursosprofesores.html">
							<i class="glyphicon glyphicon-ok"></i>
							Recursos </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <?php 
                   
                        include_once('config.php');
              			    $tildes = $db->query("SET NAMES 'utf-8'");
              			 	  $sql= "select descripcion from roles where idRol=3"; 
              
        
                     
                                 $resultado = $db->query($sql);
                    			 while($fila = $resultado->fetch_assoc()){
                    			     
                                     echo  ' <div class="profile-content">'.$fila['descripcion'].'</div>';
                    			 }
                ?>
		</div>
	</div>
</div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Todos ponemos 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
