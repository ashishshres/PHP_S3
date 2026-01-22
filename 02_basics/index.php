<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_basics</title>
</head>

<body>
    <section>
        <!-- 1. Insert PHP code to declare two variables and store their sum, difference, product and division and print its value with proper format-->
        <?php
        $num1 = 10;
        $num2 = 5;
        $sum = $num1 + $num2;
        $diff = $num1 - $num2;
        $prod = $num1 * $num2;
        $div = $num1 / $num2;
        print("$num1 + $num2 = $sum <br>");
        print("$num1 - $num2 = $diff <br>");
        print("$num1 * $num2 = $prod <br>");
        print("$num1 / $num2 = $div <br>");
        ?>
    </section>

    <section>
        <!-- 2. Insert PHP code to store your name in a variable and print its length using strlen() -->
        <?php
        $name = "Ashish";
        $length = strlen($name);
        print("Length: $length");
        ?>
    </section>

    <section>
        <!-- 3. Insert PHP code to store a quote in a variable and print the number of words using str_word_count() -->
        <?php
        $quote = "Education beats the beauty";
        $words = str_word_count($quote);
        print("Total words: $words");
        ?>
    </section>

    <section>
        <!-- 4. Insert PHP code to store a color in a variable and change it to upper case using strtoupper() -->
        <?php
        $color = "green";
        print(strtoupper($color));
        ?>
    </section>

    <section>
        <!-- 5. Insert PHP code to store `YELLOW` in a variable and change it to lower case using strtolower() -->
        <?php
        $color = "YELLOW";
        print(strtolower($color));
        ?>
    </section>

    <section>
        <!-- 6. Insert PHP code to store `Hello World!` in a variable and replace the `World` with your name using str_replace() -->
        <?php
        $str = "Hello World!";
        print(str_replace("World", "Ashish", $str));
        ?>
    </section>

    <section>
        <!-- 7. Insert PHP code to concatenate two strings and display the output -->
        <?php
        $first = "Ashish";
        $last = "Shrestha";
        $fullname = $first . " " . $last;
        print($fullname);
        ?>
    </section>

    <section>
        <!-- 8. Insert PHP code to check greatest among three numbers -->
        <?php
        $num1 = 10;
        $num2 = 5;
        $num3 = 20;
        if ($num1 >= $num2 && $num1 >= $num3) {
            print("$num1 is greatest");
        } else if ($num2 >= $num1 && $num2 >= $num3) {
            print("$num2 is greatest");
        } else {
            print("$num3 is greatest");
        }
        ?>
    </section>

    <section>
        <!-- 
      9. Insert PHP code to print the message according to status code as following using switch():
      - 200: "OK"
      - 404: "Not Found"
      - 500: "Internal Server Error"
      - default: "Unknown Status Code"
     -->
        <?php
        $status = 200;
        $msg = "";
        switch ($status) {
            case 200:
                $msg = "OK";
                break;
            case 404:
                $msg = "Not Found";
                break;
            case 500:
                $msg = "Internal Server Error";
                break;
            default:
                $msg = "Unknown Status Code";
        }
        print("Message: $msg");
        ?>
    </section>

    <section>
        <!-- 
      10. Insert PHP code to print the message according to status code as following using match():
      - 200: "OK"
      - 404: "Not Found"
      - 500: "Internal Server Error"
      - default: "Unknown Status Code"
     -->
        <?php
        $status = 200;
        $msg = match ($status) {
            200 => "OK",
            404 => "Not Found",
            500 => "Internal Server Error",
            default => "Unknown Status Code"
        };
        print("Message: $msg");
        ?>
    </section>
</body>

</html>