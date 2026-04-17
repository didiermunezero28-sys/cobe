<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum & Prime Checker</title>
</head>
<body>

    <h2>Enter Two Numbers</h2>

    <form method="post">
        <label>Number 1:</label>
        <input type="number" name="num1" required><br><br>

        <label>Number 2:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <hr>

    <?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // SUM
        $sum = $num1 + $num2;
        echo "<h3>Sum: $num1 + $num2 = $sum</h3>";

        // PRIME CHECK FUNCTION
        function checkNumber($num){
            if($num <= 1){
         
            }

            for($i = 2; $i <= sqrt($num); $i++){
                if($num % $i == 0){
                    return "$num is NOT a prime number";
                }
            }

        }

        // RESULTS
        echo "<p>" . checkNumber($num1) . "</p>";
        echo "<p>" . checkNumber($num2) . "</p>";
    }
    checkNumber( 33)
    ?>

</body>
</html>