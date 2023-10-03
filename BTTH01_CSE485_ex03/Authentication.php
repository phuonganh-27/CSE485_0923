<?php include "database.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
   
</head>

<body>
    <h1>Authentication</h1>

    <form method="post" action="send-email.php">
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>

        <input type="hidden" name="message" id="message" value="<?php echo $code = rand(100000, 999999); ?>" required></input>

        <br>
        <input type="submit" value="Authentication" name="submit">

    </form>

</body>

</html>