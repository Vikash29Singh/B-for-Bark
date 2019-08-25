<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["astatus"]);
header("Location: index.html");
?>