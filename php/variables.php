<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Variables</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            //Variables
            $name = "John";
            $age = 25;
            echo $name;

            echo "<br/>";
            //Constants
            define("MSG", "HI SoloLearners!", true);
            echo MSG;

            echo "<br/>";
            //Data Types
            //String
            $string_1 = "Hello";
            $string_2 = " World!";
            //You can join two strings together using the dot ( .) concatenation operator.
            echo $string_1.$string_2;

            echo "<br/>";
            //Integer
            $int1 = 42;
            $int2 = -42;
            echo $int1;

            echo "<br/>";
            //Float
            $pi = 3.1415;
            echo $pi;

            echo "<br/>";
            //Boolean
            $yes = true;
            $no = false;
            echo $yes;

            echo "<br/>";
            //Most of the data types can be used in combination with one another. In this example, string and integer are put together to determine the sum of two numbers.
            $string_3 = "10";
            $num_1 = 20;
            echo $string_3 + $num_1;
            //PHP automatically converts each variable to the correct data type, according to its value. This is why the variable $str is treated as a number in the addition.

            //Variable Scope
            $name_1 = "David";
            function getName() {
                echo $name_1; //It'll show a error
            }
            getName();
            //This script will produce an error, as the $name variable has a global scope, and is not accessible within the getName() function. Tap continue to see how functions can access global variables.

            //The global keyword
            $name_2 = 'David';
            function getName2() {
                global $name_2;
                echo $name_2;
            }
            getName2();

            echo "<br/>";
            //Variable Variables
            $a = "hello";
            $hello = "hi";
            echo $$a;
        ?>
    </body>
</html>