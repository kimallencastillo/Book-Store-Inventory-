<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{

    }
    table {
        border: 1px solid black;
    }
</style>
<body>
    <?php 
    $con = mysqli_connect("localhost", "root", "");
    if(!$con){
        die('Could not connect'. mysqli_error());
    }

    mysqli_select_db("smart", $con);

    $result = mysqli_query("SELECT * FROM Form");
    echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>Mobile</th>

<th>email</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 


?>
    ?>
</body>
</html>