<?php
    session_start();
    unset($_SESSION["login"]);
    unset($_SESSION["password"]);
    unset($_SESSION["id"]);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$_SERVER["HTTP_REFERER"]);
?>