<?php
error_reporting(0);
session_start();
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
// $_SESSION['data'] = json_decode(file_get_contents('http://191.101.78.67:8080/api/v1/estado/'));
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
//
// headers for not caching the results
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
// headers to tell that result is JSON
header('Content-type: application/json');
// Para retornar el JSON de una forma más "presentable"
echo json_encode($result_json, JSON_PRETTY_PRINT);
//
// Borramos cualquier variable que indique tener una SESION-VIGENTE
*/
// unset ($_SESSION['zf_sesion']); // Limpiamos solo esa variable de la SESSION
session_unset();   // Esto limpia mejor
session_destroy(); // Complementa la limpieza

include './cerrar-sesion.php';
CerrarSesion($swHidde);
$_SESSION["zf-intentos"] = 0;
// header('Location: ' . $nuevaURL.php );
// header("Location: https://zfsocios.com/login", TRUE, 301);
exit();
?>
