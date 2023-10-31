<?php

// log user out by deleting session
session_start();
session_destroy();
header("Location: login.html");
exit();

?>
