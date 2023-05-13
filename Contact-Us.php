
<!DOCTYPE html>
<html lang="en">
<head>
         
    <title>Book Store Inventory</title>
   <link rel="icon" href="img/icon.png">
   
<link rel="stylesheet" type='text/css' href="css/background.css" <?php echo time(); ?> >
   <link rel="stylesheet" type='text/css' href="css/Contact.css" <?php echo time(); ?> >
   <link rel="stylesheet" type='text/css' href="css/nav.css"<?php echo time(); ?>>
</head>
<body>
<nav>

 
<div id="nvb">
  <a  href="home.php">Home</a>
  <a href="shop.php">Shop</a>
  <a href="inventory.php">Inventory</a>


  <div id="nvb2">
    <a href="about-Us.php">About Us</a>
    <a href="Contact-Us.php">Contact Us</a>
    <a href="index.php">Log Out</a>
  </div>
</nav>
<div class="container">
  <div class="cont-sec">
    <h1>Contact Us</h1>
  
    <form class="cont-form" action="#" method="POST">
      <input type="text" class="cont-form-text" placeholder="Name">
      <input type="text" class="cont-form-text" placeholder="Employee No.">
      <input type="email" class="cont-form-text" placeholder="Your Email">
      <textarea class="cont-form-text" placeholder="Your Message" ></textarea>
      <input type="Submit" class="contact-form-btn" value="Send">
    </form>

  </div>
</div>  

</body>
</html>
