<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>
   <?php include("header.php");?>
    <h1>Contact Form</h1>
    <form action="#" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" ><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
    <?php include("footer.php");?>
</body>
</html>
