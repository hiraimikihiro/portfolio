<?php
    session_start();

    $name = $_SESSION['name'];
    require("./html/complete.html");

    $_SESSION = array();
    session_destroy();