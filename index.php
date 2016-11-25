<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio - Todos ponemos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<!-- Login css-->
	<link href="css/login.css" rel="stylesheet">

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


		

<body >
    
<?php
    
    
    include("config.php");
    session_start();
   
               if($_SERVER["REQUEST_METHOD"] == "POST") {
                  // username and password sent from form 
                  
                  $myusername = mysqli_real_escape_string($db,$_POST['username']);
                  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
                  
                  $sql = "SELECT id FROM usuario WHERE usuario = '$myusername' and pass = MD5('$mypassword')";
                  $result = mysqli_query($db,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $active = $row['active'];
                  
                  $count = mysqli_num_rows($result);
                  
                  // If result matched $myusername and $mypassword, table row must be 1 row
            		
                  if($count == 1) {
                    
                     $_SESSION['login_user'] = $myusername;
                     
                     header("location: AdminTodosPonemos/production/index.php");
                  }else {
                     $error = "Your Login Name or Password is invalid";
                  }
               }
    
    ?>
    
	<!-- Modal Login-->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Iniciar sesión</h1><br>
					
				  <form action = "" method = "post">
					<input type="text" name = "username" placeholder="Usuario">
					<input type="password" name = "password" placeholder="Contraseña">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					
				  </div>
				</div>
			</div>
		</div>
		<!-- Modal Login Fin-->
		
		

    <!-- Navigation -->
    

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="padres.php"><div class="fill" style="background-image:url('http://www.teclatam.com/wp-content/uploads/2016/11/O6B4O90.jpg');"></div></a>
                
                <div class="carousel-caption">
                    <h2>La educación como principio de desarrollo</h2>
                </div>
            </div>
            <div class="item">
                <a href="cuidador.php"><div class="fill" style="background-image:url('https://mejorconsalud.com/wp-content/uploads/2016/09/atrium_platinum_children_7-3.jpg');"></div></a>
                
                <div class="carousel-caption">
                    <h2>Todos ponemos unidos por un mejor mundo</h2>
                </div>
            </div>
            <div class="item">
                <a href="profesor.php"><div class="fill" style="background-image:url('http://cacerola.cl/blog/wp-content/uploads/2016/01/ideas-de-negocio-crecimiento-startup.jpg');"></div></a>
                
                <div class="carousel-caption">
                    
                </div>
            </div>
             <div class="item">
                <a href="madre comunitaria.php"><div class="fill" style="background-image:url('http://hotelmarinada.cat/wp-content/uploads/2015/10/animacion-e1445720021100-1900x400.jpg');"></div></a>
                
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container" ng-app="todosPonemos">

        <!-- Marketing Icons Section -->
		<div class="row" ng-controller="rolesController">
		     
			<div class="col-lg-12">
                <h1 class="page-header">
                 </h1>
            </div>
            
             <div class="col-sm-3" ng-repeat="rol in roles" ng-init="listRoles()">
                <img class="img-circle img-responsive img-center" src="{{rol.urlimagen}}" alt="">
                <h2>{{rol.titulo}}</h2>
                <p>{{rol.descripcioncorta}}</p>
                 <a href="{{rol.titulo}}.php" class="btn btn-default text-center">Ver más...</a>
               
            </div>
         
        </div>
		
		
	
		
		
        <!-- Portfolio Section -->
        <div class="row">
		<div class="col-lg-12">
                <h1 class="page-header">
                 </h1>
            </div>
            
            <div class="col-md-12 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Glosario</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod? Donec ullamcorper nulla non metus auctor fringilla. Vestibulu id ligula porta felis euismod semper. Praesent commodo cursus magna, vel ptio corporis quae nulla aspernatur in scelerisque nisl consectetur.Praesent s quae nulla aspernatur in alias at numquam commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        <a href="glosario.html" class="btn btn-default">Ver más...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
		<!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Preguntas frecuentes. <span class="text-muted">¿¿¿¿????</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulu id ligula porta felis euismod semper. Praesent commodo cursus magna, vel ptio corporis quae nulla aspernatur in scelerisque nisl consectetur.Praesent s quae nulla aspernatur in alias at numquam commodo cursus magna, vel scelerisque nisl consectetur.</p>
		   <a href="preguntas.html" class="btn btn-default">Ver más...</a>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/200x200" alt="200x200" src="http://www.unionandina.pe/wp-content/uploads/2016/01/preguntas.jpg" data-holder-rendered="true">
        </div>
      </div>

      
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
        <div class="row">
           
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        
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
                <a class="navbar-brand" href="index.php"><img src="imagen/logo.png"></a>
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
					<li>
					<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
					</li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
      <script src="js/angular.min.js"></script>
      
      
      <script src="js/angular-route.min.js"></script>
      
        


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    
    <script src="controllers/rolesController.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
