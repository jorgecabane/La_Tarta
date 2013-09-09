<?php 
 
    session_start();
    include_once "conexion.php";
 

    function verificar_login($user,$password,&$result)
    {
	        $rec = mysql_query("SELECT * FROM Usuarios WHERE usuario = '$user' and password = '$password'") or die(mysql_error() ) ;
       
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
			
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

        if(isset($_POST['login']))
        {
            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
            {
			$user=$_POST['user'];
                                          $query = mysql_query("SELECT usuario FROM Usuarios WHERE usuario = '$user'") or die(mysql_error());
$row2 = mysql_fetch_array($query);
$_SESSION["s_username"] = $row2;
                    header("location:Latarta.php");
					echo "Has sido logueado correctamente ".$_SESSION['s_username']." ";
            }
            else
            {
                echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
            }
        }
 
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
        <?php
    

?>