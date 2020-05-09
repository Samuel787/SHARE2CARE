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
          <a href="../BuyItemsPage/BuyItemsPage.php">Buy</a>
          <a href="../SellPage/SellPage.html">Sell</a>
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
          <h1>Items Available</h1>
        </header>

        <table class="table table-dark">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Seller</th>
              <th scope="col">Item</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price/Per Unit</th>
              <th scope="col">Market Price</th>
              <th scope="col">Location</th>
              <th scope="col">Contact</th>
            </tr>
          </thead>
          <tbody>
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
                while($row = $result -> fetch_assoc()){
                  echo "<tr><td>".$row["Username"]."</td><td>".$row['item_desc']."</td><td>".$row['quantity']."</td><td>".$row['price']."</td><td>".$row['mkt_price']."</td><td>".$row['location']."</td><td><button type='button' class='btn btn-primary'>Contact</button></td></tr>";
                }
              } else {
                echo "<script type='text/javascript'>alert('No records found')</script>";
              }
            ?>
          </tbody>
        </table>

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
