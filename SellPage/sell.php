<?php
    //name, email, passwrd
    $item_des = filter_input(INPUT_POST, 'item_des');
    $item_price = filter_input(INPUT_POST, 'item_price');
    $item_loc = filter_input(INPUT_POST, 'item_loc');
    
    /**
     * Extract out the username and email as well
     */
    $username = "<script>document.write(localStorage.getItem('username'));</script>";
    $email = "<script>document.write(localStorage.getItem('email'));</script>";
    
    if(empty($item_des) || 
        empty($item_price) || 
        empty($item_loc) ||
        empty($username) || 
        empty($email)){
        $message = "No fields should not be empty";
        echo "<script type='text/javascript'>alert('$message'); window.location.href='./SellPage.html';</script>";
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
            $sql = "INSERT INTO sells (Username, Email, item_desc, price, mkt_price, location) VALUES ('$username', '$email', '$item_des', 5.5, 10, '$item_loc')";
            if($conn -> query($sql)){
                //echo "New record is inserted successfully";
                header('Location: '.'../Login.html');
            } else {
                echo "Error: ".$sql."<br/>".$conn->error;
            }
            $conn->close();
        }
    }
?>