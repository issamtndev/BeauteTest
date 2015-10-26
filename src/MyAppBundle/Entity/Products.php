<?php

namespace MyAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyAppBundle\Entity\ProductsRepository")
 */
class Products
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=50)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="cont", type="string", length=50)
     */
    private $cont;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_au_l", type="string", length=50)
     */
    private $prixAuL;

    /**
     * @var string
     *
     * @ORM\Column(name="notation", type="string", length=50)
     */
    private $notation;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=250)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="miniature", type="string", length=255)
     */
    private $miniature;

    /**
    * @ORM\OneToMany(targetEntity="MyAppBundle\Entity\Avis",
    mappedBy="product")
    */
    private $avis;
    
    /**
    * @ORM\ManyToOne(targetEntity="MyAppBundle\Entity\Categories",
    inversedBy="products")
    * @ORM\JoinColumn(nullable=true)
    */
    private $category;
    
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
     * Set name
     *
     * @param string $name
     *
     * @return Products
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
     * Set marque
     *
     * @param string $marque
     *
     * @return Products
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Products
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set cont
     *
     * @param string $cont
     *
     * @return Products
     */
    public function setCont($cont)
    {
        $this->cont = $cont;

        return $this;
    }

    /**
     * Get cont
     *
     * @return string
     */
    public function getCont()
    {
        return $this->cont;
    }

    /**
     * Set prixAuL
     *
     * @param string $prixAuL
     *
     * @return Products
     */
    public function setPrixAuL($prixAuL)
    {
        $this->prixAuL = $prixAuL;

        return $this;
    }

    /**
     * Get prixAuL
     *
     * @return string
     */
    public function getPrixAuL()
    {
        return $this->prixAuL;
    }

    /**
     * Set notation
     *
     * @param string $notation
     *
     * @return Products
     */
    public function setNotation($notation)
    {
        $this->notation = $notation;

        return $this;
    }

    /**
     * Get notation
     *
     * @return string
     */
    public function getNotation()
    {
        return $this->notation;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Products
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set miniature
     *
     * @param string $miniature
     *
     * @return Products
     */
    public function setMiniature($miniature)
    {
        $this->miniature = $miniature;

        return $this;
    }

    /**
     * Get miniature
     *
     * @return string
     */
    public function getMiniature()
    {
        return $this->miniature;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->avis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add avi
     *
     * @param \MyAppBundle\Entity\Avis $avi
     *
     * @return Products
     */
    public function addAvi(\MyAppBundle\Entity\Avis $avi)
    {
        $this->avis[] = $avi;

        return $this;
    }

    /**
     * Remove avi
     *
     * @param \MyAppBundle\Entity\Avis $avi
     */
    public function removeAvi(\MyAppBundle\Entity\Avis $avi)
    {
        $this->avis->removeElement($avi);
    }

    /**
     * Get avis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set category
     *
     * @param \MyAppBundle\Entity\Categories $category
     *
     * @return Products
     */
    public function setCategory(\MyAppBundle\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MyAppBundle\Entity\Categories
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    public function get_Nb_Avis_Sans_Commentaires(){
      $nb=0;
      foreach($this->avis as $avis){
          if($avis->getComments()=='-')$nb++;
      }
      return $nb;
    }
}
