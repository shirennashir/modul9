<?php
if(isset($HTTP_COOKIE_VARS["cookie_no_induk"]))
{
    echo("isi data <b>".$HTTP_COOKIE_VARS["cookie_no_induk"]."</b><br>");
    echo("Click <a href=\"cookie_destroy.php\">next</a> untuk menghapus id !");
}else
{
    header("location: cookie.php");
    exit;
}
?>