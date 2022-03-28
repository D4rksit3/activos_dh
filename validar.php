<?

$con = mysqli_connect("localhost","root","","activos_dh");

$username = $_POST['user'];
$password = $_POST['pass'];
$rol = $_POST['rol'];

SESSION_START();

$_SESSION['user'] = $username;
$_SESSION['pass'] = $password;
$_SESSION['id_rol'] = $rol;

$sql = "SELECT * FROM usuarios WHERE usuario='$username' AND contraseña='$password' AND id_roles='$rol'";

$query = mysqli_query($con,$sql);

$array = mysqli_fetch_array($query);

if ($array['id_roles'] == 1) {
   header("location: admin/index.php");
}
elseif ($array['id_roles'] == 2) {
    header("location: it/index.php");
}
elseif ($array['id_roles'] == 3) {
    header("location: dh/index.php");
}
elseif ($array['id_roles'] == 4) {
    header("location: vc/index.php");
}
elseif ($array['id_roles'] == 5) {
    header("location: ath/index.php");
}else {
    include ("login.php");
    ?>

    <h1 class="text-center">ERROR EN LA AUTENTIFICACION</h1>

    <?php
}






/* if (isset($_POST['submit'])) {
    
}else {
    echo "error";
}
 */

?>