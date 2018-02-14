<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/02/2018
 * Time: 10:41
 */

namespace Application\Model\Auteur;


class Auteur
{
    private $IDAUTEUR,
        $NOMAUTEUR,
        $PRENOMAUTEUR,
        $EMAILAUTEUR;

    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getNOMAUTEUR()
    {
        return $this->NOMAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getPRENOMAUTEUR()
    {
        return $this->PRENOMAUTEUR;
    }

    /**
     * @return string
     */
    public function getNOMCOMPLET()
    {
        return $this->PRENOMAUTEUR . $this->NOMAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getEMAILAUTEUR()
    {
        return $this->EMAILAUTEUR;
    }


}