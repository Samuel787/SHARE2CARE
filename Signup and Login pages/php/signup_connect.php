<?php
    //name, email, passwrd
    $username = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $pwd1 = filter_input(INPUT_POST, 'pass');
    $pwd2 = filter_input(INPUT_POST, 're_pass');

    if(empty($username)){
        $message = "Username should not be empty";
        echo "<script type='text/javascript'>alert('$message'); window.location.href='../SignUp.html';</script>";
        die();
    } else if (empty($email)){
        echo "Email should not be empty";
        die();
    } else if (empty($pwd1)){
        echo "Password should not be empty";
        die();
    } else if (empty($pwd2)){
        echo "Re-password should not be empty";
        die();
    } else {
        //all fields are filled
        if($pwd1 != $pwd2){
            echo "Your passwords do not match";
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
                $sql = "INSERT INTO users (Username, Email, Password) values ('$username', '$email', '$pwd1')";
                if($conn -> query($sql)){
                    //echo "New record is inserted successfully";
                    header('Location: '.'../Login.html');
                } else {
                    echo "Error: ".$sql."<br/>".$conn->error;
                }
                $conn->close();
            }
            
        }
    }
?>