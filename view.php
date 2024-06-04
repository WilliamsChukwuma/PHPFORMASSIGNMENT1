<?php
 require_once('database.php');
 $res = $database->read();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUISNESS NEWSLETTER</title>
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

    <div class="container2">
        <div class="row">
            <table class="table">
                <tr>
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>

                <?php
                 while ($w = mysqli_fetch_assoc($res)){
                ?>
                <tr>
                    <td><?php echo $w['id']; ?></td>
                    <td><?php echo $w['fname']; ?></td>
                    <td><?php echo $w['lname']; ?></td>
                    <td><?php echo $w['email']; ?></td>
                    <td><?php echo $w['address']; ?></td>
                 </tr>

                 <?php
                 }
                 ?>
            </table>
        </div>
    </div>
    <footer>
        <p> &copy; 2024 WILLIAMS CHUKWUMA. All right reserved</p>
    </footer>
</body>
</html>