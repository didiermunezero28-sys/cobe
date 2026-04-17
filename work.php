<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><u>Employee Registration form</u></h2>
    <form action="" method="post">
        <label for="">first name</label>
        <input type="text" name="fname" placeholder="first name"><br><br>
        <label for="">last name</label>
        <input type="text" name="lname" placeholder="last name"><br><br>

        <label for="">gender</label>
        <label for=""><input type="radio" name="sex" value="male">male</label>
<label for=""><input type="radio" name="sex" value="female">female</label><br><br>
<label for="">department</label>
<select name="dept" id="">
    <option value="it">IT</option>
    <option value="accounting">accounting</option>
    <option value="staff">staff</option>
    <option value="cleaner
    ">cleaner</option>
    <option value="">gardener</option>

</select><br><br>
<label for="">salary</label>
<input type="text" name="sal" placeholder="salary"><br><br>
<label for="">position</label>
<select name="pos" id="">
    <option value="worker">worker</option>
    <option value="director">director</option>
    <option value="chief director">chief directot</option>
    <option value=" vice director">vice director</option>


</select><br><br>
<input type="submit" value="submit" name ='submit'>
<input type="reset" value="clear">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST ['lname'];
        $gender = $_POST['sex'];
        $dept = $_POST ['dept'];
        $sal = $_POST['sal'];
        $pos = $_POST['pos'];
       ?>
<table border='1'>
    <tr>
        <th>first name</th>
        <th>last name</th>
        <th>gender</th>
        <th>department</th>
        <th>salary</th>
        <th>position</th>
    </tr>
    <tr>
        <td><?php echo $fname;?></td>
        
        <td><?php echo $lname;?></td>
        
        <td><?php echo $gender;?></td>
        
        <td><?php echo $dept;?></td>
        
        <td><?php echo $sal;?></td>
        
        <td><?php echo $pos;?></td>
    </tr>
</table>
     
</body>
</html>
<?php
$server='localhost';
$user='root';
$password="";
$dbname='';
$conn=mysqli_connect($server,$user,$password,$dbname="jean");
if($conn){
    echo"connection successfuly";

}
else{
    echo"connection error";

}
?>
<?php

$mysql="insert into students(name,age,email,number,address,location) values('humura',21,'$2gender',76734577,'$salar','$dgfg'  )";

$result = mysqli_query($conn,$mysql);
if($result){
    echo 'data inserted successfully';
}
else{
    echo 'data not inserted';

    

}



?>



<?php
  
    }
    ?>














    
