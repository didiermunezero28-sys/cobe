<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee registration form</title>
</head>
<body>
    <form action="" method = "POST">
        <p>First name <input type="text" placeholder = "first name" name = "name"></p>
        <p>last name <input type="text" name = "dob"></p>
        <p>Gender <input type="radio" value = "Male" name = "sex"> Male | <input type="radio" value = "Female" name = "sex"> Female</p>
        <p>
            department
            <select name="department">
                <option value="">Select any</option>
                <option value="it"> it</option>
                <option value="accountig">accountig</option>
                <option value="staff">staff</option>
                <option value="cleaner">cleaner</option>
                <option value="gardener">gardener</option>
            </select>
        </p>
        <p>salary<input type="text" placeholder="salary"   name = "salary"></p>


         <p> position
            <select name="department">
                <option value="">Select any</option>
                <option value="worker"> worker</option>
                <option value="director">director</option>
                <option value="chief director">chief director</option>
                <option value="vice_ director">vice_ director</option>


</p>



        <p><input type="submit" value = "Save" name = "save"> <input type="reset" value = "Clear"></p>
    </form>

    <?php
         
         if(isset($_POST['save'])){
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $sex = $_POST['sex'];
            $department = $_POST['department'];
            $salary= $_POST['salary'];
    ?>
        <table border = 1>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>Gender</th>
                <th>department</th>
                <th>salary</th>
            </tr>
            <tr>
                <td><?php echo "$name";?></td>
                <td><?php echo "$dob";?></td>
                <td><?php echo "$sex";?></td>
                <td><?php echo "$department";?></td>
                <td><?php echo "$salary";?></td>
            </tr>
        </table>

    <?php
         }
    ?>
</body>
</html>