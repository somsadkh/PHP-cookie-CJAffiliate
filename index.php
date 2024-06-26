<?php 
    // Allow CORS
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type");

    $cookie_name = "cje"; 
    $domain = ".airestech.com"; // use your domain, for instance ".example.com" 
    $cjevent = $_POST['cjevent'];
    if ($cjevent) { 
        setcookie($cookie_name, $cjevent, time() + (86400 * 395), "/", $domain, true, false); 
        echo "Cookie set successfully";
    } 
    else{
        echo "cjevent parameter is missing.";
    }
?>