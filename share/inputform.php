<form method="POST" action="evaluation.php">
                <input name="cestaNavratu" type="hidden" value="<?= $cestaNavratu ?>" />
                <input name="zadaniPrikladu" type="hidden" value="<?= $zadaniPrikladu ?>" />
                <input name="vysledek" type="hidden" value="<?= $vysledek ?>" />
                <input name="nPocetOpakovani" type="hidden" value="<?= $nPocetOpakovani ?>" /><br />
                <input name="nPocetDobre" type="hidden" value="<?= $nPocetDobre ?>" /><br />
                <label>zadej výsledek</label>
                <input name="odpovedZaka" type="number" autofocus  required/><br />
                
                <br />
                <input name="odesli" type="submit" value="Odešli odpověď" />
                
</form>