<?php
class BDDcharacters extends Manager
{
    function getAllCharacters(){
        $pdo = $this->getPDO();
        $req = $pdo->prepare("SELECT * FROM characters");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS, 'Characters');
    }
    
    function getUnCharacter($id){
        $pdo = $this->getPDO();
        $req = $pdo->prepare("SELECT * FROM characters WHERE id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_CLASS, 'Characters');
    }   

    // SET functions
    public function set(Characters $characters){
        try{
            if($characters->getTribe() == "None"){
                $tribe = null;
            }else{
                $tribe = $characters->getTribe();
            }
            $cnx = $this->getPDO();
            $req = $cnx->prepare('INSERT INTO characters (id, name, strength, agility, intelligence, tribe, class) VALUES (:id, :name, :strength, :agility, :intelligence, :tribe, :class)');
            $req->bindValue(':id', $characters->getId(), PDO::PARAM_STR);
            $req->bindValue(':name', $characters->getName(), PDO::PARAM_STR);
            $req->bindValue(':strength', $characters->getStrength(), PDO::PARAM_INT);
            $req->bindValue(':agility', $characters->getAgility(), PDO::PARAM_INT);
            $req->bindValue(':intelligence', $characters->getIntelligence(), PDO::PARAM_INT);
            $req->bindValue(':tribe', $tribe, PDO::PARAM_STR);
            $req->bindValue(':class', $characters->getClass(), PDO::PARAM_STR);
            $req->execute();
            return true;
        }catch (Exception $ex) {
            return false;
        }
    }

    // UPDATE functions
    public function update(Characters $characters){
        try{
            if($characters->getTribe() == "None"){
                $tribe = null;
            }else{
                $tribe = $characters->getTribe();
            }
            $cnx = $this->getPDO();
            $req = $cnx->prepare('UPDATE characters SET id = :id, name = :name, strength = :strength, agility = :agility, intelligence = :intelligence, tribe = :tribe, class = :class WHERE id = :id');
            $req->bindValue(':id', $characters->getId(), PDO::PARAM_INT);
            $req->bindValue(':name', $characters->getName(), PDO::PARAM_STR);
            $req->bindValue(':strength', $characters->getStrength(), PDO::PARAM_INT);
            $req->bindValue(':agility', $characters->getAgility(), PDO::PARAM_INT);
            $req->bindValue(':intelligence', $characters->getIntelligence(), PDO::PARAM_INT);
            $req->bindValue(':tribe', $tribe, PDO::PARAM_STR);
            $req->bindValue(':class', $characters->getClass(), PDO::PARAM_STR);
            $req->execute();
            return true;
        }catch (Exception $ex) {
            return false;
        }
    }

    //DELETE functions
    public function delete(Characters $characters){
        try{
            $cnx = $this->getPDO();
            $req = $cnx->prepare('DELETE FROM characters WHERE id = :id');
            $req->bindValue(':id', $characters->getId(), PDO::PARAM_INT);
            $req->execute();
            return true;
        }catch (Exception $ex) {
            return false;
        }
    }
}
