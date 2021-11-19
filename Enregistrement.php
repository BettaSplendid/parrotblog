<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Le blogroquet - Enregistrement</title>
    <meta name="description" content="Ce site ne sert pas à grand chose. C'est une #perte de te mps. Franchement, vous avez mieux à faire."></meta>
    <meta property="og:image" content="https://thumbs.dreamstime.com/z/parrot-sits-branch-bright-silhouette-drawn-various-lines-style-minimalism-tattoo-bird-logo-parrot-sits-174762319.jpg">
    <meta property="og:title" content="Parrot Homework Network">

    <link rel="shortcut icon" href="659d15e99fed5c1fdb7923de68673c79.png" type="image/x-icon">
    <link rel="stylesheet" href="mystyle.css">

</head>

<body class="the_container">
    <div class="index_background">
        <div class="bar_bar">
            <a href="contact.php">Contact</a>
            <a href="comptes.php">Comptes</a>
            <a href="https://cultofthepartyparrot.com/">News</a>
            <a href="articles.php">Articles</a>
            <a class="active" href="index.php">Accueil</a>
        </div>

        <div>
            <img class="fit-picture" src="exotic_parrot_cropped.png" width=30%>
            </img>
        </div>
        <form action="formstuff.php" method="POST" class="form_container">
            <div class="container">
                <h1>Créer un compte!</h1>
                <p>Indiquez vos informations.</p>
                <hr>

                <label for="email"><b>Mail :</b></label>
                <input type="text" placeholder="Email *" name="email" id="email" required>
                <br>

                <label for="pseudo"><b>Pseudo :</b></label>
                <input type="text" placeholder="Pseudo *" name="Pseudo" id="Pseudo" required>
                <br>

                <label for="mdp"><b>Mot de Passe :</b></label>
                <input type="password" placeholder="Mot de Passe *" name="mdp" id="mdp" required>
                <br>

                <label for="mdp-repeat"><b>Verification Mot de Passe :</b></label>
                <input type="password" placeholder="Confirmer votre Mot de Passe *" name="mdp-repeat" id="mdp-repeat" required>
                <br>
                <hr>

                <p>En creant un compte, vous acceptez nos <a href="https://cultofthepartyparrot.com">conditions d'utilisations</a>.</p>
                <button type="submit" class="registerbtn"><h2>Créer son Compte</h2></button>
            </div>

            <div class="container signin">
                <p><a href="Connexion.php">J'ai deja un compte</a>.</p>
            </div>
        </form>


    </div>
    <footer class="the_footerman">
        <a href="index.php">Accueil</a> -
        <a href="Articles.php">Articles</a> -
        <a href="Connexion.php">Connexion</a> -
        <a href="Enregistrement.php">Creation de Compte</a> -
        <a href="Deconnexion.php">Deconnexion</a> -
        <div>
            @Mr Con Ure.
        </div>
    </footer>
</body>