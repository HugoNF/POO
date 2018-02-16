<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 15:42
 */

namespace Core\Model;


class DbFactory
{
    public static function PdoFactory() {
        # Création d'une connexion PDO
        $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function IdiormFactory(){
        # initialisation de Idiorm
        ORM::configure('mysql:host=localhost;dbname='.DBNAME);
        ORM::configure('username', DBUSER);
        ORM::configure('password', DBPASS);

        /**
         * Configuration de la clé primaire de chaque table
         * cette configuration d'est necessaire que si les
         * clés primaires sont différentes de 'id'
         * @see https://idiorm.readthedocs.io/en/latest/configuration.html
         */
        ORM::configure('id_column_overrides', array(
            'article' => 'IDARTICLE',
            'view_articles' => 'IDARTICLE',
        ));
    }
}