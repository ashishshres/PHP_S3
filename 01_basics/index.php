<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_basics</title>
</head>

<body>
    <section>
        <!-- 1. Insert PHP code to print your faculty using print() -->
        <?php
        print("Education");
        ?>
    </section>

    <section>
        <!-- 2. Insert PHP code to declare a variable named `fullname` and print its value using echo() -->
        <?php
        $fullname = "Ashish Shrestha";
        echo ("My name is $fullname");
        ?>
    </section>

    <section>
        <!-- 3. Insert PHP code to print your fullname without any function -->
        <?=
        "Ashish Shrestha";
        ?>
    </section>

    <section>
        <!-- 4. Insert PHP code to print your favorite fruit inside heading -->
        <h1>
            <?php
            print("Apple");
            ?>
        </h1>
    </section>

    <section>
        <!-- 5. Insert PHP code to declare a constant value `birthYear` and print its value -->
        <?php
        define("birthYear", "2060 B.S.");
        print(birthYear);
        ?>
    </section>

    <section>
        <!-- 6. Insert PHP code to insert a `h2` and `button` -->
        <?php
        print("<h2>Heading 2</h2>");
        print("<button>Click me</button>");
        ?>
    </section>

</body>

</html>