<form action="./?action=form" method="POST">
    <fieldset>
        <legend>
            Location de véhicule
        </legend>
        <label for="immat">Immatriculation</label>
        <input type="text" name="legal[immat]" style="background-color:<?= $immatColor ?>" value="<?= $immatValue ?>"></br></br>

        <label for="type">Type</label>
        <select name="model[type]">
            <option value="Touristique">Touristique</option>
        </select></br></br>

        <ul>
            <li><label for="energie">Energie</label><input type="radio" name="model[motor]" value="essence"></li>
            <li><label for="diesel">Diesel</label><input type="radio" name="model[motor]" value="diesel"></li>
            <li><label for="gpl">GPL</label><input type="radio" name="model[motor]" value="gpl"></li>
            <li><label for="bioethanol">Bioéthanol</label><input type="radio" name="model[motor]" value="bioethanol"></li>
        </ul></br></br>

        <label for="kilometrage">Kilometrage</label>
        <input type="text" name="usage[km]" style="background-color:<?= $kilometrageColor ?>" value="<?= $kilometrageValue ?>"></br></br>

        <label for="nbj">Nombre de jours</label>
        <input type="number" name="usage[days]" min="1" style="background-color:<?= $nbjColor ?>" value="<?= $nbjValue ?>"></br></br>

        <label for="assur">Assurance</label>
        <input type="checkbox" name="usage[insurance]" value="assurance" <?= $checked ?>></br></br>

        <button>Réinitialiser</button>
        <button>Valider</button>
    </fieldset>
</form>