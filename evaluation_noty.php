<?php include_once "share/head.php"; 
  

  // přiřazení pomněnných z POST
  $odpovedZaka = $_POST['odpovedZaka'];
  $vysledek = $_POST['vysledek'];
  $zadaniPrikladu = $_POST['zadaniPrikladu'];
  $nPocetOpakovani = $_POST['nPocetOpakovani'];
  $nPocetDobre = $_POST['nPocetDobre'];
  $cestaNavratu = $_POST['cestaNavratu'];
    
  // vyhodnocení odpovědí žáka a zobrazení semaforu /true or false/ + naplnění proměnné správně vypočtených příkladů            
  if ($odpovedZaka == $vysledek) {
      $obr1 = "image/ok.png";
      $nPocetDobre = $nPocetDobre +1 ;
      } else {
      $obr1 = "image/err.png";
      $nPocetDobre = $nPocetDobre +0 ;
      }

      switch ($odpovedZaka) {
        case 0:
            $odpovedZakaSlovy = "nota a";
            break;
        case 1:
            $odpovedZakaSlovy = "nota h";
            break;
        case 2:
            $odpovedZakaSlovy = "nota c1";
            break;
        case 3:
            $odpovedZakaSlovy = "nota d1";
            break;
        case 4:
            $odpovedZakaSlovy = "nota e1";
            break;
        case 5:
            $odpovedZakaSlovy = "nota f1";
            break;
        case 6:
            $odpovedZakaSlovy = "nota g1";
            break;
        case 7:
            $odpovedZakaSlovy = "nota a1";
            break;
        case 8:
            $odpovedZakaSlovy = "nota h1";
            break;
        case 9:
            $odpovedZakaSlovy = "nota c2";
            break;
        case 10:
            $odpovedZakaSlovy = "nota d2";
            break;
        case 11:
            $odpovedZakaSlovy = "nota e2";
            break;
        case 12:
            $odpovedZakaSlovy = "nota f2";
            break;
        case 13:
            $odpovedZakaSlovy = "nota g2";
            break;
        case 14:
            $odpovedZakaSlovy = "nota a2";
            break;
        case 15:
            $odpovedZakaSlovy = "nota h2";
            break;
        
        default:
            break;
    }
        
?>
    
    <div class="container center">
      <p class="nadpis">Jak to dopadlo?</p>
      <p class="odpoved"> Zadání příkladu bylo: <?= $zadaniPrikladu ?></p>
      <p class="odpoved">Tvá odpověď je: <?= $odpovedZakaSlovy ?> </p>
      <img class="semafor" src="<?= $obr1 ?>"  />
      
      <div>
        <form method="POST" action=<?= $cestaNavratu ?>>
          <input name="nPocetOpakovani" type="hidden" value="<?= $nPocetOpakovani + 1 ?>" />
          <input name="nPocetDobre" type="hidden" value="<?= $nPocetDobre  ?>" /><br />
          <input name="dalsi" type="submit" value="další příklad" autofocus />
        </form>
      </div> 
    </div>     
<?php include_once "share/footer.php" ?>
