<?php
// pole části oktáv od a po h2 
$poleCisel = [ "a",
            "h",
            "c1",
            "d1",
            "e1",
            "f1",
            "g1",
            "a1",
            "h1",
            "c2",
            "d2",
            "e2",
            "f2",
            "g2",
            "a2",
            "h2",
             ];

// generátor náhodného čísla a proměnné k počítání počtu vypočítaných příkladů
$cisloA = rand (0,15);

// naplnění kontrétní cesty img do proměnné polde náhodně vygenerovaného čísla
switch ($cisloA) {
    case 0:
        $image = "image/noty/000_a.png";
        break;
    case 1:
        $image = "image/noty/001_h.png";
        break;
    case 2:
        $image = "image/noty/002_c1.png";
        break;
    case 3:
        $image = "image/noty/003_d1.png";
        break;
    case 4:
        $image = "image/noty/004_e1.png";
        break;
    case 5:
        $image = "image/noty/005_f1.png";
        break;
    case 6:
        $image = "image/noty/006_g1.png";
        break;
    case 7:
        $image = "image/noty/007_a1.png";
        break;
    case 8:
        $image = "image/noty/008_h1.png";
        break;
    case 9:
        $image = "image/noty/009_c2.png";
        break;
    case 10:
        $image = "image/noty/010_d2.png";
        break;
    case 11:
        $image = "image/noty/011_e2.png";
        break;
    case 12:
        $image = "image/noty/012_f2.png";
        break;
    case 13:
        $image = "image/noty/013_g2.png";
        break;
    case 14:
        $image = "image/noty/014_a2.png";
        break;
    case 15:
        $image = "image/noty/015_h2.png";
        break;
    
    default:
        break;
}



$nPocetOpakovani = $_POST['nPocetOpakovani'];
$nPocetDobre = $_POST['nPocetDobre'];
$zadaniPrikladu = ("poznej notu: " .  ($poleCisel [$cisloA])  );
$vysledek = $cisloA;

include_once "share/head.php"; 

?>


<p class="zadaninoty"> Jaká je to nota? </p>

<div >
<img class="img" src="<?php echo $image ?>" alt="obrázek noty" />    
</div>



<?php 
include_once "share/inputform_list.php";
include "share/blokhodnoceni.php"; 
include_once "share/footer.php"; 
?>



