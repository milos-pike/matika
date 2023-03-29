<form method="POST" action="evaluation_noty.php">
                <input name="cestaNavratu" type="hidden" value="<?= $cestaNavratu ?>" />
                <input name="zadaniPrikladu" type="hidden" value="<?= $zadaniPrikladu ?>" />
                <input name="vysledek" type="hidden" value="<?= $vysledek ?>" />
                <input name="nPocetOpakovani" type="hidden" value="<?= $nPocetOpakovani ?>" /><br />
                <input name="nPocetDobre" type="hidden" value="<?= $nPocetDobre ?>" /><br />
                <!--
                <label>tvá odpověď</label>
                <input name="odpovedZaka" type="number" autofocus  required/><br />
                -->
                <label for="odpovedZaka">Tvá odpověď:</label>

                    <select name="odpovedZaka" id="nota-select">
                        <option value="">--vyber nějkou možnost--</option>
                        <option value="0">nota -- a -- </option>
                        <option value="1">nota -- h -- </option>
                        <option value="2">nota -- c1 -- </option>
                        <option value="3">nota -- d1 -- </option>
                        <option value="4">nota -- e1 -- </option>
                        <option value="5">nota -- f1 -- </option>
                        <option value="6">nota -- g1 -- </option>
                        <option value="7">nota -- a1 -- </option>
                        <option value="8">nota -- h1 -- </option>
                        <option value="9">nota -- c2 -- </option>
                        <option value="10">nota -- d2 -- </option>
                        <option value="11">nota -- e2 -- </option>
                        <option value="12">nota -- f2 -- </option>
                        <option value="13">nota -- g2 -- </option>
                        <option value="14">nota -- a2 -- </option>
                        <option value="15">nota -- h2 -- </option>

                    </select>
                
                <br />
                <input name="odesli" type="submit" value="Odešli odpověď" />
                
</form>