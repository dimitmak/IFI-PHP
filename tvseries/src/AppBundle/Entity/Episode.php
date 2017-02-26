<?php
/**
 * Created by PhpStorm.
 * User: makles
 * Date: 11/01/17
 * Time: 14:50
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class Episode
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
     * @var integer
     * @ORM\Column(type="integer",nullable=true)
     */
    private $episodeNumber;
    /**
     * @var string
     */
    private $tv_series_id;
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

}