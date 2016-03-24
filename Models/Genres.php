<?php



/**
 * Genres
 */
class Genres
{
    /**
     * @var integer
     */
    private $idGenre;

    /**
     * @var string
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Genres
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
}

