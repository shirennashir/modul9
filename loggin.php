<?php
session_start();

if(isset($HTTP_POST_VARS["insert"]))
{
    if(isset($HTTP_POST_VARS["user"]!="")&&(SHTTP_POST_VARS["password"]!=""))
{
    session_register("session status");
    session_register("session user");
    session_register("session password");
    $session_status="login";
    $session_user=$HTTP_POST_VARS["user"];
    $session_password=$HTTP_POST_VARS["password"];
    header("location: proses_loggin.php");
    exit;
}
}?>
<html>