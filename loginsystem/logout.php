<?php
session_start();
session_unset();
session_destroy();
header('location: /3ambrain/loginsystem/login.php');
exit;
?>
