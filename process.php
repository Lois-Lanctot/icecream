<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream Order Summary</title>
</head>
<body style="background-color: lightblue">

    <h1>Thank you for your order!</h1>

    <?php

        //Turn on error reporting
        ini_set("display_errors", 1);
        error_reporting(E_ALL);

        //Define constants
        define("PRICE_PER_SCOOP", 2.50);
        define("SALES_TAX_RATE", 0.11);


//        echo "<pre>";
//        var_dump($_POST);
//        echo "</pre>";

        if (!empty($_POST['scoops'])) {
            $scoops = $_POST['scoops'];
        }
        else {
            echo "<p>Enter scoops!</p>";
            return;
        }

        if (isset($_POST['flavor'])) {
            $flavors = $_POST['flavor'];
        }
        else {
            echo "<p>Please select at least one flavor!</p>";
            return;
        }
        $flavorString = implode(", ", $flavors);

        if (!empty($_POST['cone'])) {
            $cone = $_POST['cone'];
        }
        else {
            echo "<p>Enter cone type</p>";
            return;
        }


        // Calculate total due
        $subtotal = PRICE_PER_SCOOP * $scoops;
        $tax = SALES_TAX_RATE * $subtotal;
        $total = $subtotal + $tax;

        // Print a summary
        echo "<p>$scoops scoops</p>";
        echo "<p>Flavors: $flavorString</p>";
        echo "<p>$cone cone</p>";

        echo "<p>Subtotal: $$subtotal</p>";
        echo "<p>Tax: $$tax</p>";
        echo "<p>Total: $$total</p>";

    ?>
</body>
</html>

