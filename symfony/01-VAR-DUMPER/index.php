<?php
# Importation de l'Autoload de composer
require_once 'vendor/autoload.php';
use Symfony\Component\VarDumper\VarDumper;

# Contenu de demonstration
class Contact {
    private $_firstname,
     $_lastname;

    public function __construct($_firstname, $_lastname)
    {
        $this->_firstname = $_firstname;
        $this->_lastname = $_lastname;
    }


}
$unString   = 'Une chaine de Caractère';
$unArray    =['Hugo','Hocine','Benjamin'];
$unObjet    =new Contact('Hugo','LIEGEARD');

# Test de VarDumper
VarDumper::dump($unString);
VarDumper::dump($unArray);
VarDumper::dump($unObjet);