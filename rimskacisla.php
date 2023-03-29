<?php
// pole římských čísel do 20
$poleCisel = [ " ",
            "I",
            "II",
            "III",
            "IV",
            "V",
            "VI",
            "VII",
            "VIII",
            "IX",
            "X",
            "XI",
            "XII",
            "XIII",
            "XIV",
            "XV",
            "XVI",
            "XVII",
            "XVIII",
            "XIX",
            "XX",   
             ];

// generátor náhodného čísla a proměnné k počítání počtu vypočítaných příkladů
$cisloA = rand (1,20);
$nPocetOpakovani = $_POST['nPocetOpakovani'];
$nPocetDobre = $_POST['nPocetDobre'];
$zadaniPrikladu = ("převeď: " .  ($poleCisel [$cisloA]) . " = " . $cisloA  );
$vysledek = $cisloA;

include_once "share/head.php"; 
include_once "share/title.php"
?>


<p class="zadani">Převeď římskou číslici <br>    <?php echo($poleCisel [$cisloA]); ?> </p>

<?php 
include_once "share/inputform.php";
include "share/blokhodnoceni.php"; 
include_once "share/footer.php"; 
?>



