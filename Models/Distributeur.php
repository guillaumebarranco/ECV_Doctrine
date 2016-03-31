<?php



/**
 * Distributeur
 */
class Distributeur
{
    /**
     * @var integer
     */
    private $idDistributeur;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $cpostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $pays;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $films;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Distributeur
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Distributeur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Distributeur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cpostal
     *
     * @param string $cpostal
     *
     * @return Distributeur
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Distributeur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Distributeur
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add film
     *
     * @param \film $film
     *
     * @return Distributeur
     */
    public function addFilm(\film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \film $film
     */
    public function removeFilm(\film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }
}

