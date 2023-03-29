 <?php
session_start();


$firstVisit = false;
if (!isset($_SESSION['firstVisit']))
{
    $_SESSION['firstVisit'] = new \Datetime;
    $_SESSION['lastVisit'] = new \Datetime;
    $_SESSION['count'] = 0;
    $_SESSION['cislo1'] = 0;
    $firstVisit = true;
}
$timeSum = (new \Datetime)->diff($_SESSION['firstVisit']);
$timeLast = (new \Datetime)->diff($_SESSION['lastVisit']);
$lastVisit = $_SESSION['lastVisit'];
$_SESSION['lastVisit'] = new \Datetime;
$_SESSION['count']++;
$_SESSION['cislo1'] = $_POST['cislo1'];

echo ($firstVisit ? 'Vítejte, jste u nás poprvé.' : 'Děkujeme, že se k nám vracíte.') . PHP_EOL;
echo 'Čas první návštěvy: ' . $_SESSION['firstVisit']->format('H:i:s') . PHP_EOL;
echo 'Celkový čas strávený na našich stránkách: '.  $timeSum->format('%H:%i:%s') . PHP_EOL;
echo 'Čas předchozí návštěvy: ' . $lastVisit->format('H:i:s') . PHP_EOL;
echo 'Čas od předchozí návštěvy: ' . $timeLast->format('%H:%i:%s') . PHP_EOL;
echo 'Počet návštěv: ' . $_SESSION['count'] . PHP_EOL;
echo 'číslo z formuláře: ' . $_SESSION['cislo1'] . PHP_EOL;

        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>test</title>
        <meta name="description" content="matematika, sčítání, násobení, dělení">
        <meta name="author" content="Miloslav Ščuka - Pike-elektro">
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
    <body>



<form method="POST" action="">
                
                <input name="cislo1" type="number" autofocus  required/><br />
                
                <br />
                <input name="odesli" type="submit" value="Odešli odpověď" />
                
            </form>        
<?php 
echo 'číslo z formuláře: ' . $_SESSION['cislo1']=$_POST['cislo1']  . PHP_EOL . '<br>';
echo 'Celkový čas strávený řešením úloh: '.  $timeSum->format('%H:%i:%s') . PHP_EOL .'<br>';
print_r( $_SERVER  );

?>


</body>
</html>