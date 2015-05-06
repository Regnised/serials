<?php

namespace Acme\SerialsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Episode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_episode", type="integer")
     */
    private $idEpisode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_season", type="integer")
     */
    private $idSeason;

    /**
     * @var string
     *
     * @ORM\Column(name="name_ep", type="string", length=255)
     */
    private $nameEp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="howlong", type="time")
     */
    private $howlong;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEpisode
     *
     * @param integer $idEpisode
     * @return Episode
     */
    public function setIdEpisode($idEpisode)
    {
        $this->idEpisode = $idEpisode;

        return $this;
    }

    /**
     * Get idEpisode
     *
     * @return integer 
     */
    public function getIdEpisode()
    {
        return $this->idEpisode;
    }

    /**
     * Set idSeason
     *
     * @param integer $idSeason
     * @return Episode
     */
    public function setIdSeason($idSeason)
    {
        $this->idSeason = $idSeason;

        return $this;
    }

    /**
     * Get idSeason
     *
     * @return integer 
     */
    public function getIdSeason()
    {
        return $this->idSeason;
    }

    /**
     * Set nameEp
     *
     * @param string $nameEp
     * @return Episode
     */
    public function setNameEp($nameEp)
    {
        $this->nameEp = $nameEp;

        return $this;
    }

    /**
     * Get nameEp
     *
     * @return string 
     */
    public function getNameEp()
    {
        return $this->nameEp;
    }

    /**
     * Set howlong
     *
     * @param \DateTime $howlong
     * @return Episode
     */
    public function setHowlong($howlong)
    {
        $this->howlong = $howlong;

        return $this;
    }

    /**
     * Get howlong
     *
     * @return \DateTime 
     */
    public function getHowlong()
    {
        return $this->howlong;
    }
}
