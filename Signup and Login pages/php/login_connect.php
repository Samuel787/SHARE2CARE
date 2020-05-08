<?php
    $email = filter_input(INPUT_POST, 'your_name');
    $pwd1 = filter_input(INPUT_POST, 'your_pass');

    if(empty($email)){
        $message = "Email should not be empty";
        echo "<script type='text/javascript'>alert('$message'); window.location.href='../Login.html';</script>";
        die();
    } else if (empty($pwd1)){
        echo "Password should not be empty";
        die();
    } else {
        //connect to db
        $host = 'localhost';
        $dbusername = 'root';
        $dbpassword = '';
        $dbname = 'sgunited';

        //create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $sql = "select password from users where users.email = '$email'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                if($row["password"] == $pwd1){
                    $conn -> close();
                    header('Location: '.'../../HomePage/index.html'); //login
                } else {
                    $conn -> close();
                    $message = "In correct email or password!";
                    echo "<script type='text/javascript'>alert('$message'); window.location.href='../login.html';</script>";
                    die();            
                }
            }
            $conn -> close();
        }
            
    }
?>