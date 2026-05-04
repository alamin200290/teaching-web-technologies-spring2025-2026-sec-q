<?php

    //$data = $_POST['user'];
    //sleep(3);
    //$user = json_decode($data);
    
    $user = ['username'=> 'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    echo json_encode($user);
    // if($user->username == ""){
    //     echo "Username is null, please type username first!";
    // }else{
    //     echo "Your username is: ".$user->username;
    // }
?>