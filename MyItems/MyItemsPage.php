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

    <!-- Banner -->
    <section id="banner">
      <div class="inner">
        <header>
          <h1>My Advertisements</h1>
        </header>

        <table class="table table-dark" id="my_items_table">
          <thead style = "color:#fff;">
            <tr>
              <th scope="col" style="color:#fff; font-size:150%;">Seller</th>
              <th scope="col" style="color:#fff; font-size:150%;">Item</th>
              <th scope="col" style="color:#fff; font-size:150%;">Quantity</th>
              <th scope="col" style="color:#fff; font-size:150%;">Price Per Unit</th>
              <th scope="col" style="color:#fff; font-size:150%;">Market Price</th>
              <th scope="col" style="color:#fff; font-size:150%;">Location</th>
              <th scope="col" style="color:#fff; font-size:150%;">Contact</th>
            </tr>
          </thead>
          <tbody style ="color:#77c7ae; font-size:120%">
            <?php
              //connect to db
              $host = 'localhost';
              $dbusername = 'root';
              $dbpassword = '';
              $dbname = 'sgunited';

              //create connection
              $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
              $sql = "select * from sells";
              $result = $conn -> query($sql);
              if($result -> num_rows > 0){
                $counter = 0;
                while($row = $result -> fetch_assoc()){
                  echo "<tr id='".$counter."'><td>".$row["Username"]."</td><td>".$row['item_desc']."</td><td>".$row['quantity']."</td><td>".$row['price']."</td><td>".$row['mkt_price']."</td><td>".$row['location']."</td><td><button type='button' class='btn btn-primary' onclick='myFunction($counter)'>Clear</button></td></tr>";
                  $counter++;
                }
              } else {
                echo "<script type='text/javascript'>alert('No records found')</script>";
              }
            ?>
          </tbody>
        </table>

      </div>
    </section>

    <script>
      function myFunction(x) {
        
        row = document.getElementById(x);
        row.parentNode.removeChild(row);
        //document.getElementById("demo").innerHTML = "Hello World";
      }
    </script>

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

    <!-- <script type = "text/javascript">
      value = localStorage["Category"];
      alert("the value is: "+value);
    </script> -->
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
