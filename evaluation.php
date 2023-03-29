<?php include_once "share/head.php"; 
    
  if ($nPocetOpakovani == null) {
      $nPocetOpakovani = 0;
  }
  
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
?>
    
    <div class="container center">
      <p class="nadpis">Jak to dopadlo?</p>
      <p class="odpoved"> Zadání příkladu bylo: <?= $zadaniPrikladu ?></p>
      <p class="odpoved">Tvá odpověď je: <?= $odpovedZaka ?> </p>
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
