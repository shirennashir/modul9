<?php
session_start();
if(isset($HTTP_POST_VARS["session status"]))
{
    echo("<pre>");
    echo("User Name : <b>".$HTTP_SESSION_VARS["session_user"]."</b><br>");
    echo("Password : <b>".$HTTP_SESSION_VARS["session_Passwoord"]."</b><br>");
    echo("Click <a href=\"loggout.php\">loggout</a> untuk keluar !");
    echo("</pre>");
}else
{
    header("Location: loggin.php");
    exit;
}
?>