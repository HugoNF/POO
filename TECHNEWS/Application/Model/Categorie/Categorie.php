<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 15:31
 */

namespace Application\Model\Categorie;


class Categorie
{
    private $_IDCATEGORIE,
            $_LIBELLECATEGORIE,
            $_ROUTECATEGORIE;

    /**
     * @return mixed
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getLIBELLECATEGORIE()
    {
        return $this->LIBELLECATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getROUTECATEGORIE()
    {
        return $this->ROUTECATEGORIE;
    }


}