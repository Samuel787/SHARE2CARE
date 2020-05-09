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
          <h1>Welcome to SHARE2CARE</h1>
        </header>



        <?php
          if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $item_des = $_POST['item_des'];
            $cat = $_POST['cat'];
          }

        ?>

        <!-- <form method="POST" action="sell.php"> -->
        <form method="POST" action="SellPage2.php">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" id="username_holder" name="username" class="form-control" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" id="email_holder" name="email" class="form-control" placeholder="Enter Email" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" name="item_des" class="form-control" placeholder="Item Description" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <select name="cat" class="custom-select">
            <option selected>Choose a Category for Item</option>
            <option value="1">Toiletries</option>
            <option value="2">Medical Supplies</option>
            <option value="3">Food</option>
            <option value="4">Beverages</option>
            <option value="5">Snacks</option>
            <option value="6">Others</option>
          </select>
          <br/>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" name="item_price" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" name="item_quant" class="form-control" placeholder="Quantity" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" name="item_loc" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br/> -->

          <div class="input-group form-button">
            <input
                    type="submit"
                    name="submit"
                    id="signin"
                    class="form-submit"
                    value="Display For Sale"
                  />
          </div>
          <!-- <footer>
            <a href="#" class="button">Display for Sale</a>
          </footer> -->

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

    <!-- Scripts -->
    <script type = "text/javascript">
      //document.getElementById("custId").value = localStorage.getItem("username");
      document.getElementById("username_holder").value = localStorage.getItem("username");
      document.getElementById("email_holder").value = localStorage.getItem("email");
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>