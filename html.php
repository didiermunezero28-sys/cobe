<?php
$conn = mysqli_connect("localhost","root","","stock");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tax form</title>
</head>
<body>
    <h2><u>tax form</u></h2>
    <form action="" method="post">
        <label for="">product_name</label>
        <input type="text" name="p_name" id=""><br><br>
        <label for="">quantity</label>
        <input type="number" name="quant" id=""><br><br>
        <label for="">price</label>
        <input type="number" name="price" id=""><br><br>
        <input type="submit" value="submit" name="submit">
    </form><br><br>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['p_name'];
    $quantity = $_POST['quant'];
    $price = $_POST['price'];
    $total_price = $quantity * $price ;
    if($total_price >= 10000){
        $discount = $total_price * 10/100 ;  
          }
          else{
            $discount = 0;
          }

          $tax = $total_price * 18/100;
          $grand_total = $total_price - $discount + $tax;
$sql = "INSERT INTO product(product_name,quantity,price,total_price,discount,tax,grand_total) VALUES ('$name',$quantity,$price,$total_price,$discount,$tax,$grand_total)";

$query = mysqli_query($conn,$sql);

}
?>


    <table border = 1>
        <tr>
            <th>id</th>
        <th>product_name</th>
        <th>quantity</th>
        <th>price</th>
      <th>  total_price</th>
      <th>10% discount</th>
      <th>18% tax</th>
      <th>grand total</th>
        </tr>
        <?php 

$w = "SELECT * FROM product";
$y = mysqli_query($conn,$w);

while($fetch = mysqli_fetch_assoc($y)){
?>
<tr>
    <td><?php echo $fetch['id'];?></td>
     <td><?php echo $fetch['product_name'];?></td>
      <td><?php echo $fetch['quantity'];?></td>
       <td><?php echo $fetch['price'];?></td>
        <td><?php echo $fetch['total_price'];?></td>
         <td><?php echo $fetch['discount'];?></td>
          <td><?php echo $fetch['tax'];?></td>
           <td><?php echo $fetch['grand_total'];?></td>
</tr>
<?php }
?>
    </table>
</body>
</html>