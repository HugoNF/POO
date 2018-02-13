<?php


namespace Core\Model;

# Une classe abstraite ne peut pas etre instancier directement
# C'est une classe ou toute ses propriété et méthode n'ont pas été défini
class DbTable
{
    // -- Nom de la Table
    protected $_table;

    // -- Clé Primaire
    protected $_primary;

    // -- Class à Mapper
    protected $_classToMap;

    // -- Instance PDO, Objet PDO, BDD
    private $_db;

    public function __construct() {
        $this->_db = DbFactory::PDOFactory();
    }
    public function fetchAll() {
        $sql = "SELECT * FROM ".$this->_table;
        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(
            \PDO::FETCH_CLASS,
            $this->_classToMap
        );
    }
}