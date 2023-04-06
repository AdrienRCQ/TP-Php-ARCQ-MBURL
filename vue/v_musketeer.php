<h1>Les mousquetaires</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Force</th>
        <th>Agilité</th>
        <th>Intelligence</th>
        <th>Tribe</th>
        <th>Class</th>
    </tr>
    <?php
        if (!empty($Musketeers)) {
            foreach ($Musketeers as $musketeer) {
    ?>
    <tr>
        <td><?php echo $musketeer->getId(); ?></td>
        <td><?php echo $musketeer->getName(); ?></td>
        <td><?php echo $musketeer->getStrength(); ?></td>
        <td><?php echo $musketeer->getAgility(); ?></td>
        <td><?php echo $musketeer->getIntelligence(); ?></td>
        <td><?php echo $musketeer->getTribe(); ?></td>
        <td><?php echo $musketeer->getClass(); ?></td>
    </tr>
    <?php
        }
    }
    else {
        ?>
        <tr>
            <td colspan="7">Aucun mousquetaire ne correspond à votre recherche</td>
        </tr>
        <?php
    }
    ?>
</table>

<br>
<br>

<form action="./?action=musketeer" method="GET">
    <label for="id" class="form-label">Id du mousquetaire</label>
    <input type="number" name="id" value="<?php echo $id; ?>">
    <label for="int_min" class="form-label">Intelligence du mousquetaire</label>
    <input type="number" name="int_min" value="<?php echo $int_min; ?>">
    <input type="submit" value="Chercher">
</form>