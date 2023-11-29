<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "starcosmeticsin@gmail.com";
    $subject = "New Order for Stardust Glitter Powder";
    $email = $_POST["email"];
    $name = $_POST["name"];
    $color = $_POST["color"];
    $quantity = $_POST["quantity"];
    $price = 2500 * $quantity; // Considering the offer price is $2500

    $message = "Email: " . $email . "\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Product Color: " . $color . "\n";
    $message .= "Quantity: " . $quantity . "\n";
    $message .= "Total Price: $" . $price . "\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect to thank you page
    header("Location: thank_you.html");
    exit;
}
?>
