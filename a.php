<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST ['lname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = '1px'>
        <tr>
            <th>first name</th>
            <th>last name</th>
        </tr>
        <tr>
            <td>
                <?php
                echo $fname;
                ?>
            </td>
            <td>
                <?php
                echo $lname;
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
}

?>