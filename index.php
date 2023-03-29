<?php 
session_start();
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="cs-cz">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Procvičování matematiky</title>
        <meta name="description" content="matematika, sčítání, násobení, dělení">
        <meta name="author" content="Miloslav Ščuka - Pike-elektro">
        <meta name="version" content="2.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
</head>
<body class="bckg" >
    <div class="container">

      <h1 class="motto">Nedělejte si starosti ohledně vašich potíží v matematice. Můžu vás ujistit, že ty moje jsou stále větší.</h1>
      <p class="autor">Albert Einstein</p>
      
      <div class="row">
        <div class="one-half column center">
          <a href="nasobeni.php" > <img class="dlazdice" src="image/nasobeni.png" alt="násobení" /></a>
        </div>

        <div class="one-half column center">
          <a href="deleni.php" > <img class="dlazdice" src="image/deleni.png" alt="dělení" /></a>
        </div>
      </div>  

      <div class="row">
        <div class="one-half column center">
          <a href="rozdil.php" > <img class="dlazdice" src="image/odcitani.png" alt="odčítání" /></a>
        </div>
      
        <div class="one-half column center">
          <a href="soucet.php" > <img class="dlazdice" src="image/scitani.png" alt="sčítání" /></a>
        </div>
      </div>
      
      <div class="row">
        <div class="one-half column center">
          <a href="zaokrouhlovani.php" > <img class="dlazdice" src="image/zaokr.png" alt="sčítání pro Matýska" /></a>
        </div>

        <div class="one-half column center">
          <a href="rimskacisla.php"><img class="dlazdice" src="image/rimska_cisla.png" alt="zaokrouhlování" /> </a>
        </div>
      </div>

      <div class="row">
        <div class="one-half column center">
          <a href="soucet1m.php" > <img class="dlazdice" src="image/bur.png" alt="sčítání pro Matýska" /></a>
        </div>
          
        <div class="one-half column center">
          <a href="noty.php"><img class="dlazdice" src="image/nota.png" alt="noty" /> </a>
        </div>
        
      </div>

<?php include_once "share/footer.php"; ?>

