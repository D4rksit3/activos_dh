<? 
session_start();
$username = $_SESSION['user'];
/* $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
 */

$rol = $_SESSION['id_rol'];

if($username == null || $username = ''){
  header('Location:../login.php');
  die();
}
if ($rol != 3) {
    echo "error";
  header('Location:../login.php');
  die();
}






?>


<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.32147" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.32147" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">Control de Activos</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="inicio" id="inicio"><a href="index.php">Inicio</a></li>
                            <!-- <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">About One</a></li>
                                    <li><a href="#">About Two</a></li>
                                    <li><a href="#">About Three</a></li>
                                    <li><a href="#">About Four</a></li>
                                    <li><a href="#">About Five</a></li>
                                    <li><a href="#">About Six</a></li>
                                </ul>
                            </li> -->
                            <li class="activo"><a href="form.php">Agregar Activos</a></li>
                            <li id="serv"><a href="#">Services</a></li>
                            <li id="galeria"><a href="#">Gallery</a></li>
                            <li id="cont"><a href="#">Contact Us</a></li>
                        </ul>
                       <!--  <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul> -->

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span>  <?
                            $username = $_SESSION['user'];
                            $con = mysqli_connect("localhost","root","","activos_dh");

                            $query = "SELECT * FROM usuarios WHERE usuario='$username'";
                            $sql = mysqli_query($con,$query);

                            $fila = mysqli_fetch_array($sql);
                            
                            
                            echo $fila['nombres']?></a></li>
                            <li><a href="../logout.php" ><span class="glyphicon glyphicon-log-in"></span> Logout </a>
                               
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>