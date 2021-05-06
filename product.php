<?php include ('cproductform.php')?>
<?php include ('uproductform.php')?>
<?php include ('connection.php')?>
<?php
 
class product
  {
    public $id;
    public $name;
    public $quantity;
    public $price;
    function __construct()  
    {
     $db4 = new connection().get_connection();
     $db5 = new connection().get_connection();
    }
    function create_product($name,$quantity,$price)
    {
    $cmd = "INSERT INTO product management(name,quantity,price) VALUES('$name','$quantity','$price')";
    $create = mysqli_query($db4,$cmd);
    if($create == True)
    {
      echo "Successfull";
    }
    else
    {
      echo "Not Successfull";
    }
    }
    function update_product($id,$name,$quantity,$price)
    {
      $update = "UPDATE product management SET name = '$name',quantity = '$quantity' , price = '$price' WHERE id ='$id'";
      $result = mysqli_query($db5,$update);
      if($result == True)
      {
        echo "Success";
      }
      else
      {
        echo "No Success";
      }
    }

  }
  ?>