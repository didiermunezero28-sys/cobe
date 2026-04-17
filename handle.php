<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <p>Full Name <input type="text" placeholder = "Full name" name = "name"></p>
        <p>Date of Birth <input type="date" name = "dob"></p>
        <p>Gender <input type="radio" value = "Male" name = "sex"> Male | <input type="radio" value = "Female" name = "sex"> Female</p>
        <p>
            Level 
            <select name="level">
                <option value="">Select any</option>
                <option value="Level 3">Level 3</option>
                <option value="Level 4">Level 4</option>
                <option value="Level 5">Level 5</option>
            </select>
        </p>
        <p>Subject <input type="text" name = "subject"></p>
        <p><input type="submit" value = "Save" name = "save"> <input type="reset" value = "Clear"></p>
    </form>

    <?php
         
         if(isset($_POST['save'])){
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $sex = $_POST['sex'];
            $level = $_POST['level'];
            $subject = $_POST['subject'];
    ?>
        <table border = 1>
            <tr>
                <th>Full Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Level</th>
                <th>Subject</th>
            </tr>
            <tr>
                <td><?php echo "$name";?></td>
                <td><?php echo "$dob";?></td>
                <td><?php echo "$sex";?></td>
                <td><?php echo "$level";?></td>
                <td><?php echo "$subject";?></td>
            </tr>
        </table>

    <?php
         }
    ?>
</body>
</html>