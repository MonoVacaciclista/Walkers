<?php

    session_start();

    unset($_SESSION['ss-id']);
    unset($_SESSION['ss-rol']);
    unset($_SESSION['ss-name']);
    unset($_SESSION['ss-email']);

    session_destroy();

    echo "<script> window.location.replace('index.php'); </script>";