<?php

//Ensure connexion  to database
require_once('config/config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Le blogroquet - Connexion</title>
    <meta name="description" content="Ce site ne sert pas à grand chose. C'est une #perte de te mps. Franchement, vous avez mieux à faire.">
    </meta>
    <meta property="og:image" content="https://thumbs.dreamstime.com/z/parrot-sits-branch-bright-silhouette-drawn-various-lines-style-minimalism-tattoo-bird-logo-parrot-sits-174762319.jpg">
    <meta property="og:title" content="Parrot Homework Network">

    <link rel="shortcut icon" href="659d15e99fed5c1fdb7923de68673c79.png" type="image/x-icon">
    <link rel="stylesheet" href="mystyle.css">

</head>

<body class="the_container">
    <div class="index_background">
        <div class="header_bar">
            <img class="header_logo" src='659d15e99fed5c1fdb7923de68673c79.png'>
        </div>
        <div class="bar_bar">
            <a href="contact.php">Contact</a>
            <a href="comptes.php">Comptes</a>
            <a href="https://cultofthepartyparrot.com/">News</a>
            <a href="articles.php">Articles</a>
            <a class="active" href="index.php">Accueil</a>
        </div>

        <div class="parrot_background">
            <img class="fit-picture" src="exotic parrot cropped.png" width=30%>
        </div>

        <?php

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "Welcome to the member's area, " . $_SESSION['pseudo'] . "!";
            //include 'blablabal.php';
        } else {
            include 'vues/connexion_form.html';
        }
        ?>


        <div class="container_signin">
            <p><a href="enregistrement.php">Je n'ai pas de compte</a>.</p>
        </div>
        </form>
    </div>
</body>

<footer>
    <div class="the_footerman">
        Plus de liens :
        <a href="Articles.php">Articles</a>

        <a href="enregistrement.php">Enregistrement</a>

        <a href="connexion.php">Connexion</a>

        <a href="deconnexion.php">Deconnexion</a>

        <a href="https://cultofthepartyparrot.com/">Secret!</a>
    </div>
    <div class="the_foot_of_the_footerman">
        @Mr Con Ure.
    </div>
</footer>