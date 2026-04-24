<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
</head>
<body>
    <a href="index.php"><input type="button" value="departement"></a>
    <a href="employee.php"><input type="button" value="employee"></a>
    <h2>employee details</h2>
    <form action="" method="post">
        <label for="">employee name</label>
        <input type="text" name="en" ><br><br>
        <label for="">position</label>
      
        <select name="position" id="">
        <?php
        $se = "SELECT * FROM departement";
        $handle = mysqli_query($me,$se);
        while($rr = mysqli_fetch_assoc($handle)){

        ?>
        <option value="<?php echo $rr['post']; ?>"><?php echo $rr['post']; ?></option>
        <?php
        }
        ?>
       </select>

        <br><br>
       <input type="submit" value="submit" name = "dd">
    </form>
    
    
    <?php
   if(isset($_POST['dd'])){
   $emp_name = $_POST['en'];
   $position = $_POST['position'];

   $select = "SELECT * FROM departement WHERE post = '$position' ";
   $seo = mysqli_query($me,$select);
   
  if ($off = mysqli_fetch_assoc($seo)){
    $salary = $off['salary'];
    $d_id = $off['id'];
    $tax = 18/100 * $salary;

    $insert = "INSERT INTO employee(emp_name,d_id,position,salary,tax) VALUES 
    ('$emp_name','$d_id','$position','$salary','$tax')";

    mysqli_query($me,$insert);



    


    $available = $off['available_post'];
     
    $reft = $available - 1;
    if($available<=0){
        echo 'no position available';
    }
else{
    $upda = "UPDATE departement SET available_post = '$reft' WHERE id = '$d_id' ";

    mysqli_query($me,$upda);
}
   }
   }
   
    ?>
    
<?php

?>










    <h2>employee details</h2>
    <table border = 1>
        <tr>
            <th>id</th>
            <th>employee name</th>
            <th>departement id</th>
            <th>position</th>
            <th>salary </th>
            <th>18% tax</th>
            <th>created at</th>
        </tr>
        <?php
 $dd = "SELECT * FROM employee";
 $x = mysqli_query($me,$dd);
 while($select = mysqli_fetch_assoc($x)){

?>
<tr>
    <td><?php echo $select['id'];?></td>
    <td><?php echo $select['emp_name'];?></td>
    <td><?php echo $select['d_id'];?></td>
    <td><?php echo $select['position'];?></td>
    <td><?php echo $select['salary'];?></td>
    <td><?php echo $select['tax'];?></td>
    <td><?php echo $select['created_at'];?></td>
</tr>
<?php
}
?>
    </table>
    
</body>
</html>