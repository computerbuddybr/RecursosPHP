<?php
session_start();
foreach ($_COOKIE as $key => $value) {
    setcookie($key, '', -(time() + 3600));
}
session_destroy();
header('Location:index.php');

