<!DOCTYPE html>
<html>
  <head>
    <title>SHARE2CARE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- Header -->
    <header id="header">
      <div class="inner">
        <a href="index.html" class="logo"><strong>SG unites</strong></a>
        <nav id="nav">
            <a href="../MyItems/MyItemsPage.php">My Sales</a>
          <a href="../BuyItemsPage/BuyItemsPage.php">Buy</a>
          <a href="../SellPage1/SellPage.html">Sell</a>
          <a href="../HomePage/">Log Out</a>
        </nav>
        <a href="#navPanel" class="navPanelToggle"
          ><span class="fa fa-bars"></span
        ></a>
      </div>
    </header>
    <?php
        if(isset($_POST['submit2'])){
            $mkt_price = $_POST['mkt_price'];
            $selling_price = $_POST['selling_price'];
            $quantity = $_POST['quantity'];
            $location = $_POST['location'];
            if($selling_price > $mkt_price){
                echo "<script type='text/javascript'>alert('Your selling price is too high!'); </script>";
                sleep(0.5);
                echo "<script type='text/javascript'>window.location.href='./SellPage.php';</script>";
            } else {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $item_description = $_POST['item_des'];
                $category = $_POST['cat'];  

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
                    $sql = "INSERT INTO sells (Username, Email, item_desc, price, mkt_price, location, category, quantity) values ('$username', '$email','$item_description', '$selling_price', '$mkt_price', '$location', '$category', '$quantity');";
                    if($conn -> query($sql)){
                        //echo "New record is inserted successfully";
                        echo "<script type='text/javascript'>alert('Successfully Added'); window.location.href='./SellPage.php';</script>";
                        //header('Location: '.'./SellPage.html');
                    } else {
                        echo "Error: ".$sql."<br/>".$conn->error;
                    }
                    $conn->close();
                }
            }
        }
    
    ?>
    <!-- Banner -->
    <section id="banner">
      <div class="inner">
        <header>
          <h1>Welcome to SHARE2CARE</h1>
        </header>

        <form method="POST" action="SellPage2.php">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <h3>Market Cost:</h3>
            <input type="text" id="username_holder" name="mkt_price" class="form-control" placeholder="Enter Username" value= "<?php 
                $item_des = $_POST['item_des'];
                include('simple_html_dom.php');
                $websiteUrl = "https://www.fairprice.com.sg/search?query=".$item_des;
                //do some webscraping
                $html = file_get_html($websiteUrl);
                $mkt_price = "";
                foreach($html -> find('.sc-1plwklf-9') as $mid){
                    foreach($mid -> find('.dQYxgv') as $meow){
                        $temp = explode(">", $meow);
                        $temp2 = explode("<", $temp[1]);
                        $mkt_price = $temp2[0];
                        if($mkt_price != ''){
                            break;
                        }
                    }
                    if($mkt_price != ''){
                        break;
                    }
                }
                //$result = explode("$",$mkt_price);
                echo substr($mkt_price, 1);
            ?>" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <h3>Your Selling Price per Unit ($):</h3>
            <input type="text" id="sp_holder" name="selling_price" class="form-control" placeholder="Selling Price" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <h3>Quantitiy:</h3>
            <input type="text" id="quantitiy_holder" name="quantity" class="form-control" placeholder="Quantity" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <h3>Selling Location:</h3>
            <input type="text" id="location_holder" name="location" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <input type="hidden" name="username" value="<?php echo $_POST['username']?>"/>
          <input type="hidden" name="email" value="<?php echo $_POST['email']?>"/>
          <input type="hidden" name="item_des" value="<?php echo $_POST['item_des']?>"/>
          <input type="hidden" name="cat" value="<?php echo $_POST['cat']?>"/>
          <div class="input-group form-button">
            <input
                    type="submit"
                    name="submit2"
                    id="signin"
                    class="form-submit"
                    value="Display For Sale"
                  />
          </div>

          

        </form>
      </div>
    </section>



    <!-- Footer -->
    <footer id="footer">
      <div class="inner">
        <h3>Get in touch</h3>

        <form action="#" method="post">
          <div class="field half first">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" placeholder="Name" />
          </div>
          <div class="field half">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="Email" />
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea
              name="message"
              id="message"
              rows="6"
              placeholder="Message"
            ></textarea>
          </div>
          <ul class="actions">
            <li>
              <input value="Send Message" class="button alt" type="submit" />
            </li>
          </ul>
        </form>

        <div class="copyright">
          &copy; TEAM NUS
        </div>
      </div>
    </footer>


    <?php
        $val = $_POST['item_des'];
        echo "<script type='text/javascript>alert('hello');document.getElementById('username_holder').value = '$val';<script>";
    ?>

    <!-- Scripts -->
    <!-- <script type = "text/javascript">
      //document.getElementById("custId").value = localStorage.getItem("username");
      document.getElementById("username_holder").value = localStorage.getItem("username");
      document.getElementById("email_holder").value = localStorage.getItem("email");
    </script> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>