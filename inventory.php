<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Store Inventory</title>
    <link rel="icon" href="img/icon.png">
    
    
    <link rel="stylesheet" type='text/css' href="css/inventory.css"<?php echo time(); ?>>
    <link rel="stylesheet" type='text/css' href="css/background.css" <?php echo time(); ?> >
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
<br>
<h1 class="tB">Stocks</h1>

   
    <table class="tb2" align=left>
    <tr>
        <td>Book ID</td>
        <td><input type="text" class="input1"></td>
        </tr>
        <tr>
        <td>Book Name</td>
        <td><input type="text" class="input1"></td>
        </tr>
        <td>Author</td>
        <td><input type="text" class="input1"></td>
        </tr>
        <tr>
        <td>Publisher</td>
        <td><input type="text" class="input1"> </td>
        </tr>
        <tr>
        <td>Quantity</td>
        <td><input type="number" class="input1"></td>
        </tr>
        <tr>
        <td>Status</td>
        <td><select name="status" id="status" style="width: 100%; height: 25px">
            <option value="Active">Active</option>
            <option value="soldout">Sold Out</option>
            <option value="outS">Out of Stock</option>
            
            
        </select></td>
        </tr>
        <tr>
        <td>Price</td>
        <td><input type="number" class="input1"> </td>
        </tr>
       

        <tr>
        <td><br><br><br></td>
        </tr>
        <tr>
        <td><button class="btn-1">Add</button></td>
        <td><button class="btn-1">Update</button></td>
        </tr>
        <tr>
        <td><button class="btn-1">Delete</button> </td>
        <td><button class="btn-1">Cancel</button> </td>
        </tr>
    </table>
</div>


    <div class="col" align=right>
    <table class="tb1" >
    <tr>
    <th class="t1">ID</th>
    <th class="t1">Book Name</th>
    <th class="t1">Publisher</th>
    <th class="t1">Status</th>
    <th class="t1">Price</th>
    <th class="t1">Set</th>
    </tr>
    <tr>
    <td class="t2">1001</td>
    <td class="t2">The Lorax</td>
    <td class="t2">Random House</td>
    <td class="t2">ACTIVE</td>
    <td class="t2">2500</td>
    <td class="t2">4</td>

    </tr>
    <tr>
    <td class="t2">1002</td>
    <td class="t2">The Lord Of The Rings</td>
    <td class="t2">Amulet Books</dh>
    <td class="t2">ACTIVE</td>
    <td class="t2">2200</td>
    <td class="t2">5</td>
    </tr>

    <tr>
    <td class="t2">1003</td>
    <td class="t2">The Hunger Games</td>
    <td class="t2">Scholastic Press</td>
    <td class="t2">ACTIVE</td>
    <td class="t2">2300</td>
    <td class="t2">7</td>
    </tr>
    <tr>
    <td class="t2">1004</td>
    <td class="t2">Harry Potter</td>
    <td class="t2">Bloomsbury Publishing (UK)</td>
    <td class="t2">ACTIVE</td>
    <td class="t2">2600</td>
    <td class="t2">8</td>
    </tr>
</table>

</div>
</div>






</body>
</html>