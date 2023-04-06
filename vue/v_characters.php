<h1>Les Characters</h1>
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
        if (!empty($Characters)) {
            foreach ($Characters as $character) {
    ?>
    <tr>
        <td><?php echo $character->getId(); ?></td>
        <td><?php echo $character->getName(); ?></td>
        <td><?php echo $character->getStrength(); ?></td>
        <td><?php echo $character->getAgility(); ?></td>
        <td><?php echo $character->getIntelligence(); ?></td>
        <td><?php echo $character->getTribe(); ?></td>
        <td><?php echo $character->getClass(); ?></td>
    </tr>
    <?php
        }
    }
    else {
        ?>
        <tr>
            <td colspan="7">Aucun characters ne correspond à votre recherche</td>
        </tr>
        <?php
    }
    ?>
</table>