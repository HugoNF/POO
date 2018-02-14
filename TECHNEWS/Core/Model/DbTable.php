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
    public function fetchAll(
        $where      ='',
        $orderby    ='',
        $limit      ='',
        $offset     =''
    ) {
        $sql = "SELECT * FROM ".$this->_table;

        # Si $where n'est pas vide, alors je l'inclus
        # dans ma requête.
        if ($where != ''){
            $sql .=  ' WHERE ' . $where;
        }
        if ($orderby != ''){
            $sql .= ' ORDER BY ' . $orderby;
        }
        if ($limit != ''){
            $sql .= ' LIMIT ' . $limit;
        }
        if ($offset != ''){
            $sql .= ' OFFSET ' . $offset;
        }


        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(
            \PDO::FETCH_CLASS,
            $this->_classToMap
        );
    }

    /**
     * @return \PDO
     */
    public function fetchOne($search, $column = '')
    {
            empty($column)  ?   $column = $this->_primary : null;

            $sth = $this->_db->prepare('SELECT * FROM ' .$this->_table .' WHERE '. $column . '= :search');

            $sth->bindValue(':search',$search, \PDO::PARAM_STR);

            $sth->execute();
            $sth->setFetchMode(\PDO::FETCH_CLASS,$this->_classToMap);
            return $sth->fetch();
    }
}