<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];

    if($username == "admin" || $username == "test"){
        echo "Username already exists";
    } else {
        echo "Username available";
    }
}
?>