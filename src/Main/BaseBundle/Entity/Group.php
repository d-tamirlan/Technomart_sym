<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 09.08.2017
 * Time: 9:49
 */

namespace Main\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="group")
 */
class Group
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Catalog", inversedBy="Group")
     * @ORM\JoinColumn(name="catalog", referencedColumnName="id")
     */
    protected $catalog;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $img;
}