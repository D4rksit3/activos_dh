<?

$nombres = $_POST['q3_nombre'];
$arr = array($nombres);
$nombres = implode($arr);

$sede = $_POST['q35_sede'];
$r_social = $_POST['q53_razonSocial'];
$t_documento = $_POST['q58_tipoDe'];
$n_documento = $_POST['q57_documentoDe57'];
$direccion_calle = implode(array($_POST['q59_direccion59[dir]']));
$referencia = implode(array($_POST['q59_ref59']));
$distrito = implode(array($_POST['q59_dis59']));
$email = $_POST['q64_email64'];
$celular = $_POST['q62_numeroDe62'];
$cargoBeneficiario = $_POST['q65_cargoDel65'];
$campaña = $_POST['q41_campana41'];
$areaSolicitante = $_POST['q42_areaDel'];
$activosSolicitados = $_POST['q43_activosA'];

echo $nombres."<br>".$sede."<br>".$r_social."<br>".$t_documento."<br>".$n_documento."<br>".$direccion_calle."<br>".$referencia."<br>".$distrito."<br>".$email."<br>".$celular."<br>".$cargoBeneficiario."<br>".$campaña."<br>".$areaSolicitante."<br>".$activosSolicitados;


?>