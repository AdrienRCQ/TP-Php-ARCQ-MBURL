<?php
class install
{
    function installBDD($file)
    {
        try {
            $sql = file_get_contents($file);
            $manager = new Manager();
            $pdo = $manager->getPDO();
            $req = $pdo->prepare($sql);
            $req->execute();
        } catch (PDOException $e) {
            echo "Erreur de traitement PDO ";
            die();
        }
    }
}
