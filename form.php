<html>
<head><title>form</title></head>
<body >
    <form action ="" method="post">
        <h2><u>student information</u></h2>
         <label> fullname</label>
        <input type="full name" name="fullname" placeholder="your name" ><br><br>
       <label> date of birth</label>
         <input type="date" name="datbirth"    placeholder="date" ><br><br>
          <label> level</label>
        <select name='lv'>
             <option readonly>select level</option>
        <option>level3</option>
        <option>level4</option>
        <option>level5</option>  
    </select><br><br>

           <label> combination</label>
<select name='comb'>
    <option readonly>select combination </option>
            <option>sod </option>
             <option>net </option>
           <option>mult </option>
           <option>acc </option>
            <option>mass </option>
</select><br><br>
            <label> subject</label>
             <input type="text" name="subj" placeholder='subject'><br><br>
             <label for="">gender</label>

             <label for=""><input type="radio"  name="gender" value ='male'>male</label>

             <label for=""><input type="radio"  name="gender" value = 'female'>female</label><br><br>

             <input type="submit" value="submit" name='submit'>
</form>

<table border=1px>
    <?php
if(isset($_POST['submit'])){
$nm= $_POST['fullname'];
$bd= $_POST['datbirth'];
$lv= $_POST['lv'];
$cb = $_POST['comb'];
$su = $_POST['subj'];
$gender = $_POST['gender'];




    ?>
    <tr>
        <th>full name</th>
        <th>date of birth</th>
        <th>level</th>
        <th>combination</th>
        <th>subject</th>
        <th>gender</th>
    </tr>
    <tr>
<td><?php echo $nm;?></td>
<td><?php echo $bd;?></td>  
<td><?php echo $lv;?></td>
<td><?php echo $cb;?></td>
<td><?php echo $su;?></td>
<td><?php echo $gender;?></td>
    </tr>
</table>
</body>


<?php
}
?>


</html>