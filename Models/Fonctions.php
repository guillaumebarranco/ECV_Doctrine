<?php



/**
 * Fonctions
 */
class Fonctions
{
    /**
     * @var integer
     */
    private $idFonction;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $salaire;

    /**
     * @var boolean
     */
    private $cadre;


    /**
     * Get idFonction
     *
     * @return integer
     */
    public function getIdFonction()
    {
        return $this->idFonction;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Fonctions
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
     * Set salaire
     *
     * @param string $salaire
     *
     * @return Fonctions
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return string
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set cadre
     *
     * @param boolean $cadre
     *
     * @return Fonctions
     */
    public function setCadre($cadre)
    {
        $this->cadre = $cadre;

        return $this;
    }

    /**
     * Get cadre
     *
     * @return boolean
     */
    public function getCadre()
    {
        return $this->cadre;
    }
}

