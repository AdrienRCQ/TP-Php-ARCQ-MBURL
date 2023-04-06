<?php
class musketeerManager
{
    /**
     * Récupère un mousquetaire par son id, ou la liste de tous les mousquetaires
     *
     * @param int $id Id du mousquetaire
     * @param int $int_min Intelligence minimale (optionnel)
     * @return array
     */
    public function getMusketeerById(int $id, int $int_min) : array {
        global $data;
        if ($id < 1 || $id > count($data)) {
            $musketeers = $this->getAllMusketeers($data, $int_min);
        } else {
            foreach ($data as $musketeer) {
                if ($musketeer->getId() == $id && $musketeer->getIntelligence() >= $int_min) {
                    $musketeers = array($musketeer);
                }
            }
        }
        return $musketeers;
    }

    private function getAllMusketeers($data, $int_min) : array{
        $musketeers = array();
        foreach ($data as $musketeer) {
            if ($musketeer->getIntelligence() >= $int_min) {
                $musketeers[] = $musketeer;
            }
        }
        return $musketeers;
    }
}