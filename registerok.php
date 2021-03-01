<?php
    //check connection
    $con = mysqli_connect('localhost','root','','register');
?>

<?php
    echo $username = $_POST["username"];
    echo $email = $_POST['user_email'];
    echo $password = $_POST['user_password'];
    //echo $start_date = date('Y-m-d H:i:s');
?>

<?php
    $query = "insert into users(username,user_email,user_password,start_register)
                         values('$username','$email','$password','$start_date')";
    $result = mysqli_query($con,$query);
?>