<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_basics</title>
</head>

<body>
    <section>
        <!-- 1. Insert PHP code to print numbers from 1 to 5 using while loop -->
        <?php
        $num = 1;
        while ($num <= 5) {
            print("$num ");
            $num++;
        }
        ?>
    </section>

    <section>
        <!-- 2. Insert PHP code to print numbers from 5 to 10 using do-while loop -->
        <?php
        $num = 5;
        do {
            print("$num ");
            $num++;
        } while ($num < 11);
        ?>
    </section>

    <section>
        <!-- 3. Insert PHP code to print numbers from 10 to 15 using for loop -->
        <?php
        for ($num = 10; $num <= 15; $num++) {
            print("$num ");
        }
        ?>
    </section>

    <section>
        <!-- 4. Insert PHP code to create indexed array fruits containing "Apple", "Banana", and "Cherry". Store the first fruit in a variable named `firstFruit` and display it -->
        <?php
        $fruits = ["Apple", "Banana", "Cherry"];
        $firstFruit = $fruits[0];
        print("First fruit is $firstFruit");
        ?>
    </section>

    <section>
        <!-- 5. Insert PHP code to create an array colors containing "Red", "Green", "Blue". Add "Yellow" to the array using array_push() -->
        <?php
        $colors = ["Red", "Green", "Blue"];
        array_push($colors, "Yellow");
        var_dump($colors);
        ?>
    </section>

    <section>
        <!-- 6. Insert PHP code to create an array containing three names using array() and print the names using foreach() loop -->
        <?php
        $names = array("Bishal", "Aryan", "Shikshya");
        foreach ($names as $name) {
            print("$name <br>");
        }
        ?>
    </section>

    <section>
        <!-- 7. Insert PHP code to create associative array named `student` and store id, name and gender. Display the id and name of the student -->
        <?php
        $student = [
            "id" => 1,
            "name" => "Bishal Baniya",
            "gender" => "Male"
        ];
        print($student["id"]);
        print(" ");
        print($student["name"]);
        ?>
    </section>

    <section>
        <!-- 8. Insert PHP code to print today's date, day, month and current time -->
        <?php
        $todayDate = date("Y/m/d");
        $today = date("l");
        $month = date("F");

        date_default_timezone_set("Asia/Kathmandu");
        $time = date("h:i A");

        print("$todayDate <br>");
        print("$today <br>");
        print("$month <br>");
        print("$time <br>");
        ?>
    </section>

    <section>
        <!-- 9. Insert PHP code to create a function to display your first name` -->
        <?php
        function first()
        {
            print("Ashish");
        }

        first();
        ?>
    </section>

    <section>
        <!-- 10. Insert PHP code to create a function to pass your first and last name and display the fullname concatenating them -->
        <?php
        function fullname($first, $last)
        {
            $fullname = $first . " " . $last;
            print($fullname);
        }

        fullname("pasang", "lama");
        ?>
    </section>

    <section>
        <!-- 11. Insert PHP code to read contents of a file using fread() and display them -->
        <?php
        $file = fopen("content.txt", "r") or die("Error opening file!");
        $contents = fread($file, filesize("content.txt"));
        print($contents);
        fclose($file);
        ?>
    </section>

    <section>
        <!-- 12. Insert PHP code to write your name using fwrite() to a file -->
        <?php
        $file = fopen("name.txt", "a") or die("Error writing file!");
        $fullname = " Education";
        fwrite($file, $fullname);
        fclose($file);
        ?>
    </section>
</body>

</html>