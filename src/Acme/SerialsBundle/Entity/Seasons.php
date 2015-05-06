<?php

namespace Acme\SerialsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seasons
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Seasons
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date")
     */
    private $dateEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_season", type="integer")
     */
    private $idSeason;


    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
     */
    private $idSerial;


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
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Seasons
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Seasons
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set idSeason
     *
     * @param integer $idSeason
     * @return Seasons
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
     * Set idSerial
     *
     * @param integer $idSerial
     * @return Seasons
     */
    public function setIdSerial($idSerial)
    {
        $this->idSerial = $idSerial;

        return $this;
    }

    /**
     * Get idSerial
     *
     * @return integer 
     */
    public function getIdSerial()
    {
        return $this->idSerial;
    }
}
