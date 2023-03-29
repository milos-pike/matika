<?php
        $cisloA = rand (1,999);
        $cisloB = rand (-1,-2);
        $nPocetOpakovani = $_POST['nPocetOpakovani'];
        $nPocetDobre = $_POST['nPocetDobre'];
        $vysledek = (round($cisloA, $cisloB));
        $zaokr = round($cisloA, -1);
        $nacozao = "stovky";
        
        if ($cisloB==-1) {$nacozao = "desítky";}
        $zadaniPrikladu = ("Zaokrouhli číslo: " .  $cisloA . " na " . $nacozao . " &#8784; " . $vysledek );
     
    include_once "share/head.php"; 
    include_once "share/title.php"                
?>

<p class="zadani">Zaokrouhli číslo <br> <?php echo($cisloA);?> </br> na <?php echo($nacozao); ?>.</p>
        
<?php 
    include_once "share/inputform.php";
    include_once "share/blokhodnoceni.php"; 
    include_once "share/footer.php"; 
?>

        
        