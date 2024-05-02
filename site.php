<!DOCTYPE html> 
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    
    <body>

        <form action="site.php" method = "get">
            Name: <input type="text" name="username">
            <br>
            Age: <input type="text" name="age">
            <br>
            <input type="submit">
        </form>
        <br>

        Your name is <?php echo $_GET["username"]; ?>
        <br>
        Your age is <?php echo $_GET["age"]; ?>
        
        <?php
            $charName = "Joseph";
            $charAge = 19;

            echo "Hello $charName";
            echo "<hr>";

            $charName = "Tom";

            echo "<h1> $charName's Site </h1>";
            echo "<p> I am $charAge!!! </p>";

            #############################DATATYPES################################

            $phrase = "To be or not to be"; #string
            $age = 20; #integer
            $gpa = 3.85; #float
            $isHappy = true; #boolean

            ####################STRINGS#######################

            echo strtoupper("$charName dog\n");
            $nameLength = strlen($charName);
            echo str_replace("m","nia\n", $charName);
            echo $charName;

            $phrase = substr($phrase, 0, 5);

            echo $phrase[0];

            #####################NUMBERS#######################

            echo "<p></p>"; #decimal number
            echo (4-2.99) * 10;
            echo abs(-31);
            echo pow(10,0);
            echo max(-10, -5);
            echo round(3.2) #floor()= 3 brings down ciel() = 4 brings up

            ####################USERINPUT#####################

            #html form
            

        ?>
    </body>
</html>
