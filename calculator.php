<!DOCTYPE html>

<html>
    <body>
        <form action="calculator.php" method="post">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            Password: <input type="password" name="pw">
            <input type="submit">

        </form>

        Answer: <?php echo $_POST["num1"] + $_POST["num2"] ?>
        <?php
            $sum = $_POST["num1"] + $_POST["num2"];
            $pw = $_POST["pw"];
            echo $pw;
        ?>
    </body>
</html>
