<?php
    session_start();

    $name = "";
    $mail = "";
    $toiawase = "";
    $errorName = "";
    $errorMail = "";
    $errorToiawase = "";

    if(isset($_SESSION['name']) && isset($_SESSION['mail']) && isset($_SESSION['toiawase'])){
        $name = !is_null($_SESSION['name']) ? $_SESSION['name'] : "";
        $mail = !is_null($_SESSION['mail']) ? $_SESSION['mail'] : "";
        $toiawase = !is_null($_SESSION['toiawase']) ? $_SESSION['toiawase'] : "";
    }

    if(isset($_SESSION['error_name']) && isset($_SESSION['error_mail']) && isset($_SESSION['error_toiawase'])){
        $errorName = $_SESSION['error_name'] ? 1 : 0;
        $errorMail = $_SESSION['error_mail'] ? 1 : 0;
        $errorToiawase = $_SESSION['error_toiawase'] ? 1 : 0;
    }

    require("index.html");