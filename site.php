<!DOCTYPE html> 
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    
    <body>
        
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
        ?>
    </body>
</html>
