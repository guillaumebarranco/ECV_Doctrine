<?php



/**
 * Voiture
 */
class Voiture
{
    /**
     * @var integer
     */
    private $idVoiture;

    /**
     * @var string
     */
    private $nomVoiture;

    /**
     * @var \DateTime
     */
    private $dateMiseEnCirculation;

    /**
     * @var integer
     */
    private $kilometrage;


    /**
     * Get idVoiture
     *
     * @return integer
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }

    /**
     * Set nomVoiture
     *
     * @param string $nomVoiture
     *
     * @return Voiture
     */
    public function setNomVoiture($nomVoiture)
    {
        $this->nomVoiture = $nomVoiture;

        return $this;
    }

    /**
     * Get nomVoiture
     *
     * @return string
     */
    public function getNomVoiture()
    {
        return $this->nomVoiture;
    }

    /**
     * Set dateMiseEnCirculation
     *
     * @param \DateTime $dateMiseEnCirculation
     *
     * @return Voiture
     */
    public function setDateMiseEnCirculation($dateMiseEnCirculation)
    {
        $this->dateMiseEnCirculation = $dateMiseEnCirculation;

        return $this;
    }

    /**
     * Get dateMiseEnCirculation
     *
     * @return \DateTime
     */
    public function getDateMiseEnCirculation()
    {
        return $this->dateMiseEnCirculation;
    }

    /**
     * Set kilometrage
     *
     * @param integer $kilometrage
     *
     * @return Voiture
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return integer
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }
}

