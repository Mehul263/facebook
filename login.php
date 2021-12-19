<?php
    $con = mysqli_connect('localhost','root','','facebook');
    
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
    echo "Login Successful";
    }else{
    echo "Login Failed";
    }

?>