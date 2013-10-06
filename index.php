<?php

session_start();
include_once "conexion.php";

function verificar_login($user, $password, &$result) {
    $rec = mysql_query("SELECT * FROM Usuarios WHERE usuario = '$user' and password = '$password'") or die(mysql_error());

    $count = 0;
    while ($row = mysql_fetch_object($rec)) {
        $count++;
        $result = $row;
    }
    if ($count == 1) {
        return 1;
    } else {
        return 0;
    }
}

if (isset($_POST['login'])) {
    if (verificar_login($_POST['user'], $_POST['password'], $result) == 1) {
        $user1 = $_POST['user'];
        //$query = mysql_query("SELECT usuario FROM Usuarios WHERE usuario = '$user'") or die(mysql_error());
//$row2 = mysql_fetch_assoc($query);
        $_SESSION["usuario"]='$user1';
        $queryoli = "Select idUsuario from Usuarios where usuario='$user1'";
<<<<<<< HEAD
       // echo $queryoli;
        $resultado33 = mysql_query($queryoli) or die(mysql_error());  // sacando el id
=======
        //echo $queryoli;
        $resultado33 = mysql_query($queryoli) or die(mysql_error());
>>>>>>> e9f5c5b9fda5c18eed3641c628784bc7e019a773

        if ($resultado33) {
            $resultado34 = mysql_fetch_assoc($resultado33); // obteniendo el id
            if ($resultado34) {
                $_SESSION['idusuario']=$resultado34['idUsuario'];  
               // echo $_SESSION['idusuario'];
            } // si hay id obtenido
        } //si corrio el query 
		else {
            echo "error";
        } // si esque el query no funciono


        header("location:Latarta.php");
        echo "Has sido logueado correctamente " . $_SESSION['usuario'] . " ";
    } // si funciona verificar usuario
	else {
        echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
    }// si hay error en verificar el usuario
} //si esta posteado el login
?>
<style type="text/css">
    *{
        font-size: 14px;
        font-family: sans-serif;
    }
    form.login {
        background: none repeat scroll 0 0 #F1F1F1;
        border: 1px solid #DDDDDD;
        margin: 0 auto;
        padding: 20px;
        width: 278px;
    }
    form.login div {
        margin-bottom: 15px;
        overflow: hidden;
    }
    form.login div label {
        display: block;
        float: left;
        line-height: 25px;
    }
    form.login div input[type="text"], form.login div input[type="password"] {
        border: 1px solid #DCDCDC;
        float: right;
        padding: 4px;
    }
    form.login div input[type="submit"] {
        background: none repeat scroll 0 0 #DEDEDE;
        border: 1px solid #C6C6C6;
        float: right;
        font-weight: bold;
        padding: 4px 20px;
    }
    .error{
        color: red;
        font-weight: bold;
        margin: 10px;
        text-align: center;
    }
</style>
<form action="" method="post" class="login">
    <div><label>Username: </label><input name="user" type="text" value="admin"></div>
    <div><label>Password: </label><input name="password" type="password" value="admin"></div>
    <div><input name="login" type="submit" value="login"></div>
</form>
<?php ?>
