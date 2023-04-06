<?php

class Musketeer
{
    private $id;
    private $name;
    private $strength;
    private $agility;
    private $intelligence;
    private $tribe;
    private $class;

    /**
     * Constructeur de la classe Abonne
     * @param int $id
     * @param string $name
     * @param int $strength
     * @param int $agility
     * @param int $intelligence
     * @param string $tribe
     * @param string $class
     */
    public function __construct(int $id, string $name, int $strength, int $agility, int $intelligence, string $tribe, string $class)
    {
        $this->id = $id;
        $this->name = $name;
        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
        $this->tribe = $tribe;
        $this->class = $class;
    }

    public function print() : void {
        echo $this->name . " : " . $this->strength . " " . $this->agility . " " . $this->intelligence . " " . $this->tribe . " " . $this->class . "\n";
    }

    #region Getters

    /**
     * Retourne l'id du mousquetaire
     *
     * @return int id du mousquetaire
     */
    public function getId() : int {
        return (int) $this->id;
    }

    /**
     * Retourne le nom du mousquetaire
     *
     * @return string nom du mousquetaire
     */
    public function getName() : string {
        return (string) $this->name;
    }

    /**
     * Retourne la force du mousquetaire
     *
     * @return int force du mousquetaire
     */
    public function getStrength() : int {
        return (int) $this->strength;
    }

    /**
     * Retourne l'agilité du mousquetaire
     *
     * @return int agilité du mousquetaire
     */
    public function getAgility() : int {
        return (int) $this->agility;
    }

    /**
     * Retourne l'intelligence du mousquetaire
     *
     * @return int intelligence du mousquetaire
     */
    public function getIntelligence() : int {
        return (int) $this->intelligence;
    }

    /**
     * Retourne la tribu du mousquetaire
     *
     * @return string tribu du mousquetaire
     */
    public function getTribe() : string {
        return (string) $this->tribe;
    }

    /**
     * Retourne la classe du mousquetaire
     *
     * @return string classe du mousquetaire
     */
    public function getClass() : string {
        return (string) $this->class;
    }

    #endregion

}