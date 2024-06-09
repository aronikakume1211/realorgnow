<?php
// remove all session variables
session_start();
session_unset();
unset($_SESSION['user_id']);
unset($_SESSION['email']);
// destroy the session
session_destroy();
header("Location: /");
die();
?>