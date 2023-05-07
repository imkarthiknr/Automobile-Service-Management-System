<?php
$con =  new mysqli("127.0.0.1:3307","root","root","asmdb");

// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}

?>
