<?php



/**
 * Membres
 */
class Membres
{
    /**
     * @var integer
     */
    private $idMembre;

    /**
     * @var integer
     */
    private $idPersonne;

    /**
     * @var integer
     */
    private $idAbonnement;

    /**
     * @var \DateTime
     */
    private $dateInscription;

    /**
     * @var \DateTime
     */
    private $debutAbonnement;


    /**
     * Get idMembre
     *
     * @return integer
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idPersonne
     *
     * @param integer $idPersonne
     *
     * @return Membres
     */
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }

    /**
     * Get idPersonne
     *
     * @return integer
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set idAbonnement
     *
     * @param integer $idAbonnement
     *
     * @return Membres
     */
    public function setIdAbonnement($idAbonnement)
    {
        $this->idAbonnement = $idAbonnement;

        return $this;
    }

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
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Membres
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set debutAbonnement
     *
     * @param \DateTime $debutAbonnement
     *
     * @return Membres
     */
    public function setDebutAbonnement($debutAbonnement)
    {
        $this->debutAbonnement = $debutAbonnement;

        return $this;
    }

    /**
     * Get debutAbonnement
     *
     * @return \DateTime
     */
    public function getDebutAbonnement()
    {
        return $this->debutAbonnement;
    }
}

