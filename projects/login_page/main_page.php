<?php

// check if both username and password was provided
if(empty($_POST['username']) || empty($_POST['password'])){
    header('Location: http://localhost/codecourse/codecourse_phpbasics/projects/login_page/login_page.php');
}

if(($_POST['username'] === 'adrian.ayroso') && ($_POST['password'] === 'qwert123')){
    echo "Login successful.";
}else{
     die("Failed login");
}