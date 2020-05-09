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
          <a href="../SellPage1/SellPage.php">Sell</a>
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


          <div class = "row" style="width:500px; margin-left:20px;">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for items.." title="Type in a name">
          
          </div>
          <br/>
          <div class = "row" style="width:500px; margin-left:20px">
            <input type="text" id="myInput2" onkeyup="myFunctionLocation()" placeholder="Search for location.." title="Type in a name">
          </div>


          <br/>

        <br/>

        <table class="table table-dark" id="myTable">
          <thead class="thead-dark">
            <tr>
              <th scope="col" style="color:#fff; font-size:150%;">Seller</th>
              <th scope="col" style="color:#fff; font-size:150%;">Item</th>
              <th scope="col" style="color:#fff; font-size:150%;">Quantity</th>
              <th scope="col" style="color:#fff; font-size:150%;">Price/Per Unit ($)</th>
              <th scope="col" style="color:#fff; font-size:150%;">Market Price ($)</th>
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
                while($row = $result -> fetch_assoc()){
                  echo "<tr><td>".$row["Username"]."</td><td>".$row['item_desc']."</td><td>".$row['quantity']."</td><td>".$row['price']."</td><td>".$row['mkt_price']."</td><td>".$row['location']."</td><td><button type='button' class='btn btn-primary'><a href='https://chat-d5feb.web.app/'>Contact Me!</a></button></td></tr>";
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

    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function myFunctionLocation() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  </body>
</html>
