<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 09.08.2017
 * Time: 9:07
 */

namespace Main\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Producer", inversedBy="products")
     * @ORM\JoinColumn(name="producer", referencedColumnName="id")
     */
    protected $producer;

    /**
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="products")
     * @ORM\JoinColumn(name="group", referencedColumnName="id")
     */
    protected $group;

    /**
     * @ORM\ManyToOne(targetEntity="Distinction", inversedBy="products")
     * @ORM\JoinColumn(name="distinction", referencedColumnName="id")
     */
    protected $distinction;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $last_price;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $in_stock;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sale_count;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $add_date;

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
     * Set producer
     *
     * @param integer $producer
     *
     * @return Product
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return integer
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set group
     *
     * @param integer $group
     *
     * @return Product
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return integer
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set distinction
     *
     * @param integer $distinction
     *
     * @return Product
     */
    public function setDistinction($distinction)
    {
        $this->distinction = $distinction;

        return $this;
    }

    /**
     * Get distinction
     *
     * @return integer
     */
    public function getDistinction()
    {
        return $this->distinction;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set lastPrice
     *
     * @param string $lastPrice
     *
     * @return Product
     */
    public function setLastPrice($lastPrice)
    {
        $this->last_price = $lastPrice;

        return $this;
    }

    /**
     * Get lastPrice
     *
     * @return string
     */
    public function getLastPrice()
    {
        return $this->last_price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set inStock
     *
     * @param boolean $inStock
     *
     * @return Product
     */
    public function setInStock($inStock)
    {
        $this->in_stock = $inStock;

        return $this;
    }

    /**
     * Get inStock
     *
     * @return boolean
     */
    public function getInStock()
    {
        return $this->in_stock;
    }

    /**
     * Set saleCount
     *
     * @param integer $saleCount
     *
     * @return Product
     */
    public function setSaleCount($saleCount)
    {
        $this->sale_count = $saleCount;

        return $this;
    }

    /**
     * Get saleCount
     *
     * @return integer
     */
    public function getSaleCount()
    {
        return $this->sale_count;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     *
     * @return Product
     */
    public function setAddDate($addDate)
    {
        $this->add_date = $addDate;

        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime
     */
    public function getAddDate()
    {
        return $this->add_date;
    }
}
