<?php
/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 21/02/2017
 * Time: 14:38
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class UserSerie
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class UserSerie
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    private $tvserieId;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    private $userId;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    private $Nameserie;
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $date;

    /**
     * @return string
     */
    public function getTvserieId()
    {
        return $this->tvserieId;
    }

    /**
     * @param string $tvserieId
     */
    public function setTvserieId($tvserieId)
    {
        $this->tvserieId = $tvserieId;
    }

    /**
     * @return string
     */
    public function getNameserie()
    {
        return $this->Nameserie;
    }

    /**
     * @param string $Nameserie
     */
    public function setNameserie($Nameserie)
    {
        $this->Nameserie = $Nameserie;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}