<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    
    <?php
    $value = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstnum']) && isset($_POST['secondnum']) && isset($_POST['operator'])) {
        $num1 = $_POST['firstnum'];
        $num2 = $_POST['secondnum'];
        $operator = $_POST['operator'];

        function calculator($num1, $num2, $operator) {
            switch ($operator) {
                case '+':
                    return $num1 + $num2;
                case '-':
                    return $num1 - $num2;
                case '*':
                    return $num1 * $num2;
                case '/':
                    return $num1 / $num2;
                default:
                    return "Invalid operator!";
            }
        }

        $value = calculator($num1, $num2, $operator);
    }
    ?>

    <form action="" method="POST">
        <label for="firstnum">First Number:</label>
        <input id="firstnum" type="number" name="firstnum" required><br><br>
        
        <label for="secondnum">Second Number:</label>
        <input id="secondnum" type="number" name="secondnum" required><br><br>

        <label for="operator">Operator:</label>
        <select name="operator" id="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <label for="result">Result:</label>
        <input id="result" type="text" name="result" value="<?php echo $value; ?>" readonly><br><br>
        
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
