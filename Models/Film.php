<?php



/**
 * Film
 */
class Film
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
     * @var \distributeur
     */
    private $distributeur;

    /**
     * @var \genre
     */
    private $genre;


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
     * @return Film
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
     * @return Film
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
     * @return Film
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
     * @return Film
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
     * @return Film
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
     * @return Film
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
     * @return Film
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
     * @return Film
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

    /**
     * Set distributeur
     *
     * @param \distributeur $distributeur
     *
     * @return Film
     */
    public function setDistributeur(\distributeur $distributeur = null)
    {
        $this->distributeur = $distributeur;

        return $this;
    }

    /**
     * Get distributeur
     *
     * @return \distributeur
     */
    public function getDistributeur()
    {
        return $this->distributeur;
    }

    /**
     * Set genre
     *
     * @param \genre $genre
     *
     * @return Film
     */
    public function setGenre(\genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \genre
     */
    public function getGenre()
    {
        return $this->genre;
    }
}

