<?php


class Chambre
{
    private $numChambre;
    private  $type;

    /**
     * @return mixed
     */
    public function getNumChambre()
    {
        return $this->numChambre;
    }

    /**
     * @param mixed $numChambre
     */
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}