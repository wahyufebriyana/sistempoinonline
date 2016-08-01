<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);

echo '<meta http-equiv="refresh" content="; ../index.php">';
?>