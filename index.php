<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- Exo 1 -->
    <form action="user.php" method="get">
        Nom: <input type="text" name="nom"><br>
        Prénom: <input type="text" name="prenom"><br>
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <!-- Exo 2 -->
    <form action="user.php" method="post">
        Nom: <input type="text" name="nom"><br>
        Prénom: <input type="text" name="prenom"><br>
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <!-- Exo 5 -->
    <form action="index.php" method="post">
        <label for="civility">Civilité:</label>
        <select name="civility" id="civility">
            <option value="mr">Mr</option>
            <option value="mme">Mme</option>
        </select>
        <br>
        <label for="name">Nom:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="firstname">Prénom:</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <input type="submit" value="Envoyer">
        <br>
        <label for="file-upload">Votre fichier à télécharger:</label>
        <input type="file" id="file-upload" name="file-upload">
        <input type="submit" value="Upload">
    </form>
</body>

</html>

<?php
// Exo 6
// si les variables "name" et "firstname" ont été envoyées via le formulaire "POST" et qu'elles ne sont pas vides, alors
// leur contenu sera affiché.
if (isset($_POST["name"]) && empty($_POST["name"]) && isset($_POST["firstname"]) && empty($_POST["firstname"])) {
    echo trim(strip_tags($_POST["name"])) . " " . trim(strip_tags($_POST["firstname"])) . "<br>";
}

// Exo 7
if (isset($_POST["file-upload"]) && empty($_POST["file-upload"])) {
    echo trim(strip_tags($_POST["file-upload"])) . "<br>";
}


