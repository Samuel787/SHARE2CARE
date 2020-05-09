<?php
    //for web scraping
    include('simple_html_dom.php');

    //name, email, passwrd
    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $item_des = filter_input(INPUT_POST, 'item_des');
    $item_price = filter_input(INPUT_POST, 'item_price');
    $item_loc = filter_input(INPUT_POST, 'item_loc');
    $item_cateogry = filter_input(INPUT_POST, 'cat');
    $item_quant = filter_input(INPUT_POST, 'item_quant');

    $websiteUrl = "https://www.fairprice.com.sg/search?query=".$item_des;

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

            //do some webscraping
            $html = file_get_html($websiteUrl);
            $mkt_price = "";
            foreach($html -> find('.sc-1plwklf-9') as $mid){
                foreach($mid -> find('.dQYxgv') as $meow){
                    $temp = explode(">", $meow);
                    $temp2 = explode("<", $temp[1]);
                    $mkt_price = $temp2[0];
                    echo $mkt_price;
                    if($mkt_price != ''){
                        break;
                    }
                }
                if($mkt_price != ''){
                    break;
                }
            }
            $sql = "INSERT INTO sells (Username, Email, item_desc, price, mkt_price, location, category, quantity) values ('$username', '$email','$item_des', '$item_price', '$mkt_price', '$item_loc', '$item_cateogry', '$item_quant');";
            if($conn -> query($sql)){
                //echo "New record is inserted successfully";
                echo "<script type='text/javascript'>alert('Successfully Added'); window.location.href='./SellPage.html';</script>";
                //header('Location: '.'./SellPage.html');
            } else {
                echo "Error: ".$sql."<br/>".$conn->error;
            }
            $conn->close();
        }
    }
?>