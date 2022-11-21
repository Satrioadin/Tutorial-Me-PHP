<?php

// reset session
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// reset cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// kembali ke halaman
header("Location: login.php");
