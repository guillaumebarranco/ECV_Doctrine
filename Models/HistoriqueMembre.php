<?php



/**
 * HistoriqueMembre
 */
class HistoriqueMembre
{
    /**
     * @var integer
     */
    private $idHistorique;

    /**
     * @var integer
     */
    private $idMembre;

    /**
     * @var integer
     */
    private $idSeance;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Get idHistorique
     *
     * @return integer
     */
    public function getIdHistorique()
    {
        return $this->idHistorique;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     *
     * @return HistoriqueMembre
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

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
     * Set idSeance
     *
     * @param integer $idSeance
     *
     * @return HistoriqueMembre
     */
    public function setIdSeance($idSeance)
    {
        $this->idSeance = $idSeance;

        return $this;
    }

    /**
     * Get idSeance
     *
     * @return integer
     */
    public function getIdSeance()
    {
        return $this->idSeance;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return HistoriqueMembre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

