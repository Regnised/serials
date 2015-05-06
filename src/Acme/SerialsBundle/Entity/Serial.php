<?php

namespace Acme\SerialsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Serial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

//    /**
//     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
//     */
//    protected $products;
//
//    public function __construct()
//    {
//        $this->products = new ArrayCollection();
//    }

    /**
     * @var string
     *
     * @ORM\Column(name="name_serial", type="string", length=255)
     */
    private $nameSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=100)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="ganre", type="string", length=50)
     */
    private $ganre;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="studio", type="string", length=50)
     */
    private $studio;

    /**
     * @var string
     *
     * @ORM\Column(name="producer", type="string", length=50)
     */
    private $producer;

    /**
     * @var string
     *
     * @ORM\Column(name="actors", type="string", length=255)
     */
    private $actors;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime")
     */
    private $dateStart;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set nameSerial
     *
     * @param string $nameSerial
     * @return Serial
     */
    public function setNameSerial($nameSerial)
    {
        $this->nameSerial = $nameSerial;

        return $this;
    }

    /**
     * Get nameSerial
     *
     * @return string 
     */
    public function getNameSerial()
    {
        return $this->nameSerial;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Serial
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set ganre
     *
     * @param string $ganre
     * @return Serial
     */
    public function setGanre($ganre)
    {
        $this->ganre = $ganre;

        return $this;
    }

    /**
     * Get ganre
     *
     * @return string 
     */
    public function getGanre()
    {
        return $this->ganre;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Serial
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set studio
     *
     * @param string $studio
     * @return Serial
     */
    public function setStudio($studio)
    {
        $this->studio = $studio;

        return $this;
    }

    /**
     * Get studio
     *
     * @return string 
     */
    public function getStudio()
    {
        return $this->studio;
    }

    /**
     * Set producer
     *
     * @param string $producer
     * @return Serial
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return string 
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set actors
     *
     * @param string $actors
     * @return Serial
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Serial
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
     * Set description
     *
     * @param string $description
     * @return Serial
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
