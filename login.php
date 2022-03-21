<?php session_start();
if(isset($_SESSION["connecte"])){
    header('Location:accueil.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>CONNEXION Admin</h1>
        <hr>
        <form action="" method="post">
            <label for="email">Votre email :</label><br>
            <input type="email" name="email" id="email" ><br><br>

            <label for="password">Votre mot de passe :</label><br>
            <input type="password" name="password" id="password"><br><br>

            <button type="submit">Connexion</button>

        </form>
    </div>
</div>
</body>
</html>
