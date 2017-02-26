<?php
/**
 * Created by PhpStorm.
 * User: makles
 * Date: 11/01/17
 * Time: 15:00
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class UserEpisode
{

    /**
     * @var string
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $user_id;

    private $episode_id;
    /**
     * @var boolean
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $current;
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $watchedAt;
}