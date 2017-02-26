<?php
/**
 * Created by PhpStorm.
 * User: makles
 * Date: 11/01/17
 * Time: 14:56
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * Class User
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class User
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
     * @ORM\Column(type="string",nullable=true)
     */
    private $name;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $password;

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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}