<?php include "database.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title>forgot passord</title>
    <meta charset="UTF-8">
   
</head>

<body>
    <h1>Forgot password</h1>

    <form method="post" action="send-email.php">
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>

        <input type="hidden" name="message" id="message" value="<?php echo $code = rand(100000, 999999); ?>" required></input>

        <br>
        <input type="submit" value="Forgot" name="submit">

    </form>

</body>

</html>