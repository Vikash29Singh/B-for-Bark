<?php
session_start();
unset($_SESSION["USER_NAME"]);
unset($_SESSION["astatus"]);
session_destroy();
header("Location: index.php");
?>