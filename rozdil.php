<?php
        $cisloA = rand (1,99);
        $cisloB = rand (1,99);
        if ($cisloA > $cisloB) {
            $vysledek = $cisloA - $cisloB;
            $nPocetOpakovani = $_POST['nPocetOpakovani'];
            $nPocetDobre = $_POST['nPocetDobre'];
            $zadaniPrikladu = ("odečti: " .$cisloA."-". $cisloB . " = " . $vysledek  );     
        } else {
            $cisloC = $cisloA;
            $cisloA = $cisloB;
            $cisloB = $cisloC;
            $vysledek = $cisloA - $cisloB;
            $nPocetOpakovani = $_POST['nPocetOpakovani'];
            $nPocetDobre = $_POST['nPocetDobre'];
            $zadaniPrikladu = ("odečti: " .$cisloA."-". $cisloB . " = " . $vysledek  );
        }
        
        include_once "share/head.php"; 
        include_once "share/title.php"
?>

        <p class="zadani">Kolik je?  <br><?php echo($cisloA . " - " . $cisloB ); ?> </p>

<?php 
include_once "share/inputform.php";
include "share/blokhodnoceni.php"; 
include_once "share/footer.php"; 
?>
