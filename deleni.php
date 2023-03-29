<?php
        $cisloA = rand (1,10);
        $cisloB = rand (1,9);
        $vysledek = ($cisloA * $cisloB) / $cisloB;
        $nPocetOpakovani = $_POST['nPocetOpakovani'];
        $nPocetDobre = $_POST['nPocetDobre'];
        $zadaniPrikladu = ("vyděl: " .($cisloA*$cisloB)."/". $cisloB . " = " . $cisloA  );
        
       
        include_once "share/head.php"; 
        include_once "share/title.php"
?>

        <p class="zadani">Kolik je?  <br><?php echo(($cisloA*$cisloB) . " / " . $cisloB ); ?> </p>

<?php 
include_once "share/inputform.php";
include "share/blokhodnoceni.php"; 
include_once "share/footer.php"; 
?>
