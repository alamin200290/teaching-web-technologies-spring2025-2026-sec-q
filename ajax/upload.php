<?php

    $username = $_POST['username'];
    sleep(3);
    if($username == ""){
        echo "Username is null, please type username first!";
    }else{
        echo "Your username is: ".$username;
    }
?>