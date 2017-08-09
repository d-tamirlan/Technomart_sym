<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 09.08.2017
 * Time: 9:52
 */

namespace Main\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="distinction")
 */
class Distinction
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="distinction")
     * @ORM\JoinColumn(name="group", referencedColumnName="id")
     */
    protected $group;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $name;
}