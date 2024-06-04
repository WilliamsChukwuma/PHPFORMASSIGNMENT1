<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buisness Newletter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <nav class="navbar">
         <a href="index.php">HOME</a>
         <a href="about.html">ABOUT US</a>            
         <!-- <a href="#benefit">WHAT YOU BENEFIT?</a> -->
         <a href="view.php">VIEW CLIENTS</a>
         <a href="contact.html">CONTACT US</a>
        </nav>
    </header>

    <?php
      require_once('database.php');

      if(!empty ($_POST)){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $res = $database->create($fname, $lname, $email, $address);
    
        if($res){
            echo "<div id='success-message'><center>You have successfully signed up to our newsletter !</center></div>";
          }
      }
    ?>

    <form action="" method="post" class="container">
        <img src="images\logo.png" alt="">
        <h2 style="color: brown;">SignUp To Our Newsletter</h2>
        <div class="form-group">
            <input type="text" name="fname" placeholder="First Name" autofocus required>
        </div>

        <div class="form-group">
            <input type="text" name="lname" placeholder="Last Name" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <input type="text" name="address" placeholder="Shipping Address">
        </div>

        <div class="form-button">
            <button type="submit" value="submit">Sign Up</button>
        </div>
    </form>

    <footer>
        <p>&copy; 2024 WILLIAMS CHUKWUMA. All right reserved</p>
    </footer>

    <script>
    // Function to hide the success message after 5 seconds (5000 milliseconds)
    setTimeout(function() {
        let messageDiv = document.getElementById('success-message');
        if (messageDiv) {
            messageDiv.style.display = 'none';
        }
    }, 5000); 
    </script>
</body>
</html>