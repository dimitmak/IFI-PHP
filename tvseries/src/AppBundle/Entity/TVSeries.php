<?php
/**
 * Created by PhpStorm.
 * User: makles
 * Date: 10/01/17
 * Time: 15:35
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class TVSeries
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class TVSeries
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
    private $name;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $author;
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $releasedAt;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $description;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $image;

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
     * @param string $nom
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * @param \DateTimeInterface $releasedAt
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }



}