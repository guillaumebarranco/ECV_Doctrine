<?php



/**
 * Films
 */
class Films
{
    /**
     * @var integer
     */
    private $idFilm;

    /**
     * @var integer
     */
    private $idGenre;

    /**
     * @var integer
     */
    private $idDistributeur;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $resum;

    /**
     * @var \DateTime
     */
    private $dateDebutAffiche;

    /**
     * @var \DateTime
     */
    private $dateFinAffiche;

    /**
     * @var integer
     */
    private $dureeMinutes;

    /**
     * @var integer
     */
    private $anneeProduction;


    /**
     * Get idFilm
     *
     * @return integer
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }

    /**
     * Set idGenre
     *
     * @param integer $idGenre
     *
     * @return Films
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return integer
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set idDistributeur
     *
     * @param integer $idDistributeur
     *
     * @return Films
     */
    public function setIdDistributeur($idDistributeur)
    {
        $this->idDistributeur = $idDistributeur;

        return $this;
    }

    /**
     * Get idDistributeur
     *
     * @return integer
     */
    public function getIdDistributeur()
    {
        return $this->idDistributeur;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Films
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resum
     *
     * @param string $resum
     *
     * @return Films
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
     * Set dateDebutAffiche
     *
     * @param \DateTime $dateDebutAffiche
     *
     * @return Films
     */
    public function setDateDebutAffiche($dateDebutAffiche)
    {
        $this->dateDebutAffiche = $dateDebutAffiche;

        return $this;
    }

    /**
     * Get dateDebutAffiche
     *
     * @return \DateTime
     */
    public function getDateDebutAffiche()
    {
        return $this->dateDebutAffiche;
    }

    /**
     * Set dateFinAffiche
     *
     * @param \DateTime $dateFinAffiche
     *
     * @return Films
     */
    public function setDateFinAffiche($dateFinAffiche)
    {
        $this->dateFinAffiche = $dateFinAffiche;

        return $this;
    }

    /**
     * Get dateFinAffiche
     *
     * @return \DateTime
     */
    public function getDateFinAffiche()
    {
        return $this->dateFinAffiche;
    }

    /**
     * Set dureeMinutes
     *
     * @param integer $dureeMinutes
     *
     * @return Films
     */
    public function setDureeMinutes($dureeMinutes)
    {
        $this->dureeMinutes = $dureeMinutes;

        return $this;
    }

    /**
     * Get dureeMinutes
     *
     * @return integer
     */
    public function getDureeMinutes()
    {
        return $this->dureeMinutes;
    }

    /**
     * Set anneeProduction
     *
     * @param integer $anneeProduction
     *
     * @return Films
     */
    public function setAnneeProduction($anneeProduction)
    {
        $this->anneeProduction = $anneeProduction;

        return $this;
    }

    /**
     * Get anneeProduction
     *
     * @return integer
     */
    public function getAnneeProduction()
    {
        return $this->anneeProduction;
    }
}

