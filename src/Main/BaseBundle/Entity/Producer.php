<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 09.08.2017
 * Time: 9:45
 */

namespace Main\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="producer")
 */
class Producer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $image;
}