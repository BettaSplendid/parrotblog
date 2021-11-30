<?php

//Ensure connexion  to database
require_once('config/config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Le blogroquet</title>
    <meta name="description" content="Ce site ne sert pas à grand chose. C'est une #perte de te mps. Franchement, vous avez mieux à faire.">
    </meta>
    <meta property="og:image" content="https://thumbs.dreamstime.com/z/parrot-sits-branch-bright-silhouette-drawn-various-lines-style-minimalism-tattoo-bird-logo-parrot-sits-174762319.jpg">
    <meta property="og:title" content="Parrot Homework Network">

    <link rel="shortcut icon" href="sharpparrot.png" type="image/x-icon">
    <link rel="stylesheet" href="mystyle.css">


</head>

<body>
    <div class="super_container">
        <div class="superheader"></div>
        <div class="header_bar">
            <img class="header_logo" src='sharpparrot.png'>
        </div>
        <div class="bar_bar">
            <a href="contact.php">Contact</a>
            <a href="comptes.php">Comptes</a>
            <a href="https://cultofthepartyparrot.com/">News</a>
            <a href="articles.php">Articles</a>
            <a class="active" href="index.php">Accueil</a>
        </div>

        <!-- La page en elle même -->

        <div class="container_main">
            <div class="Connexion_compte">
                <br>Vous avez un compte? Cliquer ici:
                <a href="connexion.php">blablablaba</a>
            </div>

            <div class="enregistrement_compte">
                <br> Vous voulez vous inscrire? Cliquez ici!
                <a href="enregistrement.php">Enregistrement</a>

            </div>
            <div class="Deconnexion">
                <br> Deconnexion
                <a href="deconnexion.php">Deconnexion</a>
            </div>
        </div>

    </div>
</body>

<footer>
    <div class="the_footerman">
        Plus de liens :
        <a href="articles.php">Articles</a>

        <a href="enregistrement.php">Enregistrement</a>

        <a href="connexion.php">Connexion</a>

        <a href="deconnexion.php">Deconnexion</a>

        <a href="https://cultofthepartyparrot.com/">Secret!</a>
    </div>
    <div class="the_foot_of_the_footerman">
        @Mr Con Ure.
    </div>
</footer>