<?php



/**
 * Abonnements
 */
class Abonnements
{
    /**
     * @var integer
     */
    private $idAbonnement;

    /**
     * @var integer
     */
    private $idForfait;

    /**
     * @var \DateTime
     */
    private $debut;


    /**
     * Get idAbonnement
     *
     * @return integer
     */
    public function getIdAbonnement()
    {
        return $this->idAbonnement;
    }

    /**
     * Set idForfait
     *
     * @param integer $idForfait
     *
     * @return Abonnements
     */
    public function setIdForfait($idForfait)
    {
        $this->idForfait = $idForfait;

        return $this;
    }

    /**
     * Get idForfait
     *
     * @return integer
     */
    public function getIdForfait()
    {
        return $this->idForfait;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Abonnements
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }
}

