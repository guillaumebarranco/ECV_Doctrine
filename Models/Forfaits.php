<?php



/**
 * Forfaits
 */
class Forfaits
{
    /**
     * @var integer
     */
    private $idForfait;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $resum;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @var integer
     */
    private $dureeJours;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Forfaits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set resum
     *
     * @param string $resum
     *
     * @return Forfaits
     */
    public function setResum($resum)
    {
        $this->resum = $resum;

        return $this;
    }

    /**
     * Get resum
     *
     * @return string
     */
    public function getResum()
    {
        return $this->resum;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Forfaits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dureeJours
     *
     * @param integer $dureeJours
     *
     * @return Forfaits
     */
    public function setDureeJours($dureeJours)
    {
        $this->dureeJours = $dureeJours;

        return $this;
    }

    /**
     * Get dureeJours
     *
     * @return integer
     */
    public function getDureeJours()
    {
        return $this->dureeJours;
    }
}

