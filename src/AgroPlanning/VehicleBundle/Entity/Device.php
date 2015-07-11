<?php

namespace AgroPlanning\VehicleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Device
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
     * @var \stdClass
     *
     * @ORM\Column(name="user_id", type="object")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="make_model", type="string", length=255)
     */
    private $makeModel;

    /**
     * @var string
     *
     * @ORM\Column(name="IMEI", type="string", length=255)
     */
    private $iMEI;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255)
     */
    private $key;


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
     * Set userId
     *
     * @param \stdClass $userId
     * @return Device
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \stdClass 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set makeModel
     *
     * @param string $makeModel
     * @return Device
     */
    public function setMakeModel($makeModel)
    {
        $this->makeModel = $makeModel;

        return $this;
    }

    /**
     * Get makeModel
     *
     * @return string 
     */
    public function getMakeModel()
    {
        return $this->makeModel;
    }

    /**
     * Set iMEI
     *
     * @param string $iMEI
     * @return Device
     */
    public function setIMEI($iMEI)
    {
        $this->iMEI = $iMEI;

        return $this;
    }

    /**
     * Get iMEI
     *
     * @return string 
     */
    public function getIMEI()
    {
        return $this->iMEI;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return Device
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }
}
