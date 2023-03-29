<?php
        $cisloA = rand (1,10);
        $cisloB = rand (1,9);
        $vysledek = $cisloA + $cisloB;
        $nPocetOpakovani = $_POST['nPocetOpakovani'];
        $nPocetDobre = $_POST['nPocetDobre'];
        $zadaniPrikladu = ("sečti: " .$cisloA."+". $cisloB . " = " . $vysledek  );
        
       
        include_once "share/head.php"; 
        include_once "share/title.php"
?>

        <p class="zadani">Kolik je?  <br><?php echo($cisloA . " + " . $cisloB ); ?> </p>

<?php 
include_once "share/inputform.php";
include "share/blokhodnoceni.php"; 
include_once "share/footer.php"; 
?>
