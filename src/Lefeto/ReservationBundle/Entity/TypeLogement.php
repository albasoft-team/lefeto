<?php

namespace Lefeto\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeLogement
 *
 * @ORM\Table(name="type_logement")
 * @ORM\Entity(repositoryClass="Lefeto\ReservationBundle\Repository\TypeLogementRepository")
 */
class TypeLogement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DesignationLogement", type="string", length=255)
     */
    private $designationLogement;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixLogement", type="float")
     */
    private $prixLogement;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreOffresType", type="integer")
     */
    private $nombreOffresType;

    /**
     * @ORM\ManyToOne(targetEntity="Residence", inversedBy="typelogements")
     * @ORM\JoinColumn(name="residence_id", referencedColumnName="id")
     */
    private $residence;
    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="typelogement")
     */
    private $offres;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->offres = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set designationLogement
     *
     * @param string $designationLogement
     *
     * @return TypeLogement
     */
    public function setDesignationLogement($designationLogement)
    {
        $this->designationLogement = $designationLogement;

        return $this;
    }

    /**
     * Get designationLogement
     *
     * @return string
     */
    public function getDesignationLogement()
    {
        return $this->designationLogement;
    }

    /**
     * Set prixLogement
     *
     * @param float $prixLogement
     *
     * @return TypeLogement
     */
    public function setPrixLogement($prixLogement)
    {
        $this->prixLogement = $prixLogement;

        return $this;
    }

    /**
     * Get prixLogement
     *
     * @return float
     */
    public function getPrixLogement()
    {
        return $this->prixLogement;
    }

    /**
     * Set nombreOffresType
     *
     * @param integer $nombreOffresType
     *
     * @return TypeLogement
     */
    public function setNombreOffresType($nombreOffresType)
    {
        $this->nombreOffresType = $nombreOffresType;

        return $this;
    }

    /**
     * Get nombreOffresType
     *
     * @return integer
     */
    public function getNombreOffresType()
    {
        return $this->nombreOffresType;
    }

    /**
     * Set residence
     *
     * @param \Lefeto\ReservationBundle\Entity\Residence $residence
     *
     * @return TypeLogement
     */
    public function setResidence(\Lefeto\ReservationBundle\Entity\Residence $residence = null)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get residence
     *
     * @return \Lefeto\ReservationBundle\Entity\Residence
     */
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * Add offre
     *
     * @param \Lefeto\ReservationBundle\Entity\Offre $offre
     *
     * @return TypeLogement
     */
    public function addOffre(\Lefeto\ReservationBundle\Entity\Offre $offre)
    {
        $this->offres[] = $offre;

        return $this;
    }

    /**
     * Remove offre
     *
     * @param \Lefeto\ReservationBundle\Entity\Offre $offre
     */
    public function removeOffre(\Lefeto\ReservationBundle\Entity\Offre $offre)
    {
        $this->offres->removeElement($offre);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffres()
    {
        return $this->offres;
    }
}
