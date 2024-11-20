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
        <div>
        <img id = "logo" src="public/images/logo.png" alt="Logo name: Master Recipes" width="112" height="73" >
            <nav>
            <ul class="ulContainer">
                <li><a class="item" href="index.html"><strong>HOME</strong></a></li>
                <li><a class="item" href="search.html"><strong>SEARCH</strong></a></li>
                <!-- <li><a class="item" href="article.html"><strong>ARTICLE</strong></a></li> -->
                <li><a class="item" href="contact.html"><strong>CONTACT</strong></a></li>
                <li><a class="item" href="account.html"><strong>LOGIN</strong></a></li>
            </ul>
            </nav>
        </div>
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
