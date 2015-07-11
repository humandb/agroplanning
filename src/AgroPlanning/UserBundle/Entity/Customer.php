<?php

namespace AgroPlanning\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Customer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AgroPlanning\UserBundle\Entity\CustomerRepository")
 */
class Customer extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255, nullable=true, options={"default": "en"})
     */
    private $lang;

    /**
     * @ORM\OneToMany(targetEntity="AgroPlanning\VehicleBundle\Entity\Vehicle", mappedBy="customer")
     */
    protected $vehicles;

    public function __construct()
    {
        $this->vehicles = new ArrayCollection();

        parent::__construct();
    }

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
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function getDisplayName()
    {
        return sprintf("%s %s", $this->firstName, $this->lastName);
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Customer
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Add vehicles
     *
     * @param \AgroPlanning\VehicleBundle\Entity\Vehicle $vehicles
     * @return Customer
     */
    public function addVehicle(\AgroPlanning\VehicleBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles[] = $vehicles;

        return $this;
    }

    /**
     * Remove vehicles
     *
     * @param \AgroPlanning\VehicleBundle\Entity\Vehicle $vehicles
     */
    public function removeVehicle(\AgroPlanning\VehicleBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles->removeElement($vehicles);
    }

    /**
     * Get vehicles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
}
