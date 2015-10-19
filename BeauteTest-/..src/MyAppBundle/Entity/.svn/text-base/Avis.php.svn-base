<?php

namespace MyAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyAppBundle\Entity\AvisRepository")
 */
class Avis
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
     * @var integer
     *
     * @ORM\Column(name="id_b_t", type="integer")
     */
    private $idBT;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="critere", type="string", length=150)
     */
    private $critere;

    /**
     * @var integer
     *
     * @ORM\Column(name="presentation", type="integer")
     */
    private $presentation;

    /**
     * @var integer
     *
     * @ORM\Column(name="texture", type="integer")
     */
    private $texture;

    /**
     * @var integer
     *
     * @ORM\Column(name="penetration", type="integer")
     */
    private $penetration;

    /**
     * @var integer
     *
     * @ORM\Column(name="efficacite_court_terme", type="integer")
     */
    private $efficaciteCourtTerme;

    /**
     * @var integer
     *
     * @ORM\Column(name="efficacite_long_terme", type="integer")
     */
    private $efficaciteLongTerme;

    /**
     * @var integer
     *
     * @ORM\Column(name="odeur", type="integer")
     */
    private $odeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="qualite_prix", type="integer")
     */
    private $qualitePrix;

    /**
     * @var string
     *
     * @ORM\Column(name="points_forts", type="string", length=250)
     */
    private $pointsForts;

    /**
     * @var string
     *
     * @ORM\Column(name="points_faibles", type="string", length=250)
     */
    private $pointsFaibles;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text")
     */
    private $comments;

    /**
    * @ORM\ManyToOne(targetEntity="MyAppBundle\Entity\Products",
    inversedBy="avis")
    * @ORM\JoinColumn(nullable=true)
    */
    private $product;
    

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
     * Set idBT
     *
     * @param integer $idBT
     *
     * @return Avis
     */
    public function setIdBT($idBT)
    {
        $this->idBT = $idBT;

        return $this;
    }

    /**
     * Get idBT
     *
     * @return integer
     */
    public function getIdBT()
    {
        return $this->idBT;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Avis
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Avis
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set critere
     *
     * @param string $critere
     *
     * @return Avis
     */
    public function setCritere($critere)
    {
        $this->critere = $critere;

        return $this;
    }

    /**
     * Get critere
     *
     * @return string
     */
    public function getCritere()
    {
        return $this->critere;
    }

    /**
     * Set presentation
     *
     * @param integer $presentation
     *
     * @return Avis
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return integer
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set texture
     *
     * @param integer $texture
     *
     * @return Avis
     */
    public function setTexture($texture)
    {
        $this->texture = $texture;

        return $this;
    }

    /**
     * Get texture
     *
     * @return integer
     */
    public function getTexture()
    {
        return $this->texture;
    }

    /**
     * Set penetration
     *
     * @param integer $penetration
     *
     * @return Avis
     */
    public function setPenetration($penetration)
    {
        $this->penetration = $penetration;

        return $this;
    }

    /**
     * Get penetration
     *
     * @return integer
     */
    public function getPenetration()
    {
        return $this->penetration;
    }

    /**
     * Set efficaciteCourtTerme
     *
     * @param integer $efficaciteCourtTerme
     *
     * @return Avis
     */
    public function setEfficaciteCourtTerme($efficaciteCourtTerme)
    {
        $this->efficaciteCourtTerme = $efficaciteCourtTerme;

        return $this;
    }

    /**
     * Get efficaciteCourtTerme
     *
     * @return integer
     */
    public function getEfficaciteCourtTerme()
    {
        return $this->efficaciteCourtTerme;
    }

    /**
     * Set efficaciteLongTerme
     *
     * @param integer $efficaciteLongTerme
     *
     * @return Avis
     */
    public function setEfficaciteLongTerme($efficaciteLongTerme)
    {
        $this->efficaciteLongTerme = $efficaciteLongTerme;

        return $this;
    }

    /**
     * Get efficaciteLongTerme
     *
     * @return integer
     */
    public function getEfficaciteLongTerme()
    {
        return $this->efficaciteLongTerme;
    }

    /**
     * Set odeur
     *
     * @param integer $odeur
     *
     * @return Avis
     */
    public function setOdeur($odeur)
    {
        $this->odeur = $odeur;

        return $this;
    }

    /**
     * Get odeur
     *
     * @return integer
     */
    public function getOdeur()
    {
        return $this->odeur;
    }

    /**
     * Set qualitePrix
     *
     * @param integer $qualitePrix
     *
     * @return Avis
     */
    public function setQualitePrix($qualitePrix)
    {
        $this->qualitePrix = $qualitePrix;

        return $this;
    }

    /**
     * Get qualitePrix
     *
     * @return integer
     */
    public function getQualitePrix()
    {
        return $this->qualitePrix;
    }

    /**
     * Set pointsForts
     *
     * @param string $pointsForts
     *
     * @return Avis
     */
    public function setPointsForts($pointsForts)
    {
        $this->pointsForts = $pointsForts;

        return $this;
    }

    /**
     * Get pointsForts
     *
     * @return string
     */
    public function getPointsForts()
    {
        return $this->pointsForts;
    }

    /**
     * Set pointsFaibles
     *
     * @param string $pointsFaibles
     *
     * @return Avis
     */
    public function setPointsFaibles($pointsFaibles)
    {
        $this->pointsFaibles = $pointsFaibles;

        return $this;
    }

    /**
     * Get pointsFaibles
     *
     * @return string
     */
    public function getPointsFaibles()
    {
        return $this->pointsFaibles;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Avis
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }



    /**
     * Set product
     *
     * @param \MyAppBundle\Entity\Products $product
     *
     * @return Avis
     */
    public function setProduct(\MyAppBundle\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \MyAppBundle\Entity\Products
     */
    public function getProduct()
    {
        return $this->product;
    }
}
