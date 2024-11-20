<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - MealMaster</title>
    <link rel="stylesheet" href="../css/wstyles.css">

</head>
<body>
    <?php include("header.php"); ?>
    <main>
        <form>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <div class="form-actions">
                <button type="submit" id="signin-button">Sign in</button>
                <button type="reset" id="reset-button">Reset</button>
                <span>Not a member? <a href="sign_up.php">Sign up</a></span>
            </div>
        </form>
        <img id="sign_up" src="../images/sign_in.jpg" alt="Table Talk" width="450" height="450" >
    </main>
    <?php include("footer.php"); ?>
</body>
</html>

