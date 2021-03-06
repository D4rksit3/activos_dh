<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login/css/style.css">

   
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="login/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Iniciar Sesion <strong>Control de Activos</strong></h3>
              <p class="mb-4">Bienvenido al portal de control de activos.</p>
            </div>

            
            <form action="validar.php" method="POST">
              <div class="form-group first">
                <label for="username">usuario</label>
                <input type="text" class="form-control" name="user">

              </div>
              <div class="form-group last mb-4">
                <label for="password">contraseña</label>
                <input type="password" class="form-control" name="pass">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
            <!--     <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  -->
              </div>
              <select class="form-group last mb-4"  name="rol" >
                <option selected disabled>Seleciona el rol</option>
                <?
                $conexion = mysqli_connect("localhost","root","","activos_dh");
                $query = "SELECT * FROM roles";
                $sql = mysqli_query($conexion,$query);
               
                while ($row = mysqli_fetch_array($sql)) {
                  ?>
                  <option value="<? echo $row['id_rol'] ?>"><? echo $row['rol'] ?></option>
                  <?
                }
                ?>
              </select>

            <!--   <a type="submit" value="Iniciar Sesion" class="btn text-white btn-block btn-primary"></a> -->
              <button type="submit" class="btn text-white btn-block btn-primary">Iniciar Sesion</button>
             
            <!--   <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> -->
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
  </body>
</html>