<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 16:32
 */

namespace Application\Model\Categorie;


use Core\Model\DbTable;

class CategorieDb extends DbTable
{
    protected $_table       = 'categorie';
    protected $_primary     = 'IDCATEGORIE';
    protected $_classToMap  = Categorie::class;
}