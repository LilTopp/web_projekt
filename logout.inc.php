<?php 

session_start();
session_unset();
session_destroy();

header("location: ../web_rocnikovy/index.php");
exit();

