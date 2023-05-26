<?php
error_reporting(0);
session_start();
// PLANES.PHP
$zf_Sesion = '{"ZF_Cuenta": "", "ZF_HoraLimite": null, "ZF_HoraIngreso": null, "ZF_Intentos": 0, "ZF_IntentMax": 5, "ZF_Token": null}';
$objSesion = json_decode($zf_Sesion);

$_SESSION["zf-cuenta"]   = isset($_SESSION["zf-cuenta"]) ? $_SESSION["zf-cuenta"] : $objSesion->ZF_Cuenta;
$_SESSION["zf-intentos"] = isset($_SESSION["zf-intentos"]) ? $_SESSION["zf-intentos"] : $objSesion->ZF_Intentos;
$_SESSION["zf-token"]    = isset($_SESSION["zf-token"]) ? $_SESSION["zf-token"] : $objSesion->ZF_Token;
$_SESSION["zf-intentmax"]= isset($_SESSION["zf-intentmax"]) ? $_SESSION["zf-intentmax"] : $objSesion->ZF_IntentMax;

// $_SESSION["zf-intentos"] = $_SESSION["zf-intentos"]+ 1;
// print "Intentos : " . $_SESSION["zf-intentos"];

// include './Login/Login-HEAD-HTML.php';
// $_SERVER;
/*
echo "ZF-Test : " . $_SESSION['zf_test'] . "<br/>";
echo "ZF-Carga : " . $_SESSION['zf_carga'];
isset($_POST["zf-email"]) ? print $_POST["zf-email"] : "";
isset($_POST["zf-password"]) ? print $_POST["zf-password"] : "";
$_SESSION['zf_carga'] = isset($_SESSION['zf_carga']) ? $_SESSION['zf_carga'] : 1;
$_SESSION['zf_test'] = "Key-Cargado (" . $_SESSION['zf_carga'] . ")";
$_SESSION['zf_carga'] = $_SESSION['zf_carga']+ 1;
$jwt_Session = "";
$swHidde = "";
*/
/*
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
// Aqui la diferencia
$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
*/
//
// Enlace de referencia
// https://www.w3schools.com/php/php_json.asp
/*
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>
*/
/*
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

var_dump(json_decode($jsonobj));
var_dump(json_decode($jsonobj, true));
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>
*/
/*
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
// Aqui la diferencia
$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
*/
/*
$jsonobj1 = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj1);
echo "Peter1 : " . $obj->Peter . "<br />";

$jsonobj2 = '[{"Peter":35,"Ben":37,"Joe":43}]';
$obj = json_decode($jsonobj2);
echo "Peter2 : " . $obj[0]->Peter . "<br />";

[
    {
        "estado_ID": 0,
        "estado_Abrevia": "EPRO",
        "estado_Descripcion": "En proceso"
    },
    {
        "estado_ID": 1,
        "estado_Abrevia": "REGI",
        "estado_Descripcion": "Registrado"
    },
    {
        "estado_ID": 2,
        "estado_Abrevia": "ACTI",
        "estado_Descripcion": "Activado"
    }
]
*/
$_SESSION['data'] = json_decode(file_get_contents('http://191.101.78.67:8080/api/v1/estado/'));
// var_dump($_SESSION['data']);
// print $_SESSION['data'][0]->estado_Abrevia;
/*
{
    "estado_ID": 0,
    "estado_Abrevia": "EPRO",
    "estado_Descripcion": "En proceso"
}
// $item = $_SESSION['data'][0];
foreach ($_SESSION['data'] as $item) {
    print $item->estado_Abrevia . "<br/>\n";
}
// var_dump($_SESSION['data'][0]->estado_Abrevia);
try {
    // $jwt_Session = $_SESSION["jwtToken"];
    // Pendiente de verificar con isset()
    if(isset($_SESSION['jwtToken'])) {
        //
    }
    // echo "<span>Session : " . $_SESSION['jwtToken'] . "</span>";
    $jwt_Session = $_SESSION['jwtToken'];
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    // echo "First finally.\n";
}

// // $swHidde = "";
if ($jwt_Session == "") {
    $_SESSION['user_SignForm'] = "";
    $_SESSION['jwtToken'] = "";
    $_SESSION['user_Account'] = "";
    $_SESSION['user_Password'] = "";    
    // LoginUsuario("");
} 
else 
{
    // echo "Session : " . $jwt_Session;
    $swHidde = "hidden";
    header("Location: /Login");
    die();
}
*/
if(isset($_SESSION["zf-token"])) {
    include './planes.php';
} else {
    header("Location: https://zfsocios.com/login", TRUE, 301);
    // include './login';
    exit();
}
LoginUsuario($swHidde);
?>
