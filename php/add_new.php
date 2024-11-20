<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MealMaster</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <span>MealMaster</span>
            <div>
                <a href="#">Search</a>
                <a href="#">Home</a>
                <a href="#">Contact Us</a>
                <a href="#">Login</a>
            </div>
        </nav>
    </header>
    <main>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="instruction">Instruction:</label>
            <textarea id="instruction" name="instruction" rows="6"></textarea>

            <div>
                <button type="submit" id="save-button">Save changes</button>
                <button type="button" id="delete-button">Delete recipe</button>
            </div>
        </form>
    </main>
</body>
</html>
