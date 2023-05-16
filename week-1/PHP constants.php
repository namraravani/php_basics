<!DOCTYPE html>
<html>
    <link>
    <body style="font-size: 50px;">
        <?php
            define("my_info","Hello,My Name is Namra Ravani");
            // echo my_info;

            echo "<br>";

            define("1","not running...! :(");
            echo 1;

            echo "<br>";

            define("students",["Namra Ravani","Hiren Matthar","Rushabh patadia"]);
            echo students[1];

            echo "<br>";

            function display()
            {
                echo my_info;
            }

            display();
        ?>
    </body>
</html>