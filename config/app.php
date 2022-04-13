<?php
    // Sessions
    session_start();

    // Absolute routes
    $url    = 'http://localhost/Walkers/';
    $public = $url . 'public/';
    $css    = $public . 'css/';
    $imgs   = $public . 'imgs/';
    $js     = $public . 'js/';

    // Database config
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbnm = 'Walkers';