<?php

namespace Lefeto\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residence
 *
 * @ORM\Table(name="residence")
 * @ORM\Entity(repositoryClass="Lefeto\ReservationBundle\Repository\ResidenceRepository")
 */
class Residence
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
     * @ORM\Column(name="NomResidence", type="string", length=255)
     */
    private $nomResidence;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseResidence", type="string", length=255)
     */
    private $adresseResidence;
    /**
     * @var string
     *
     * @ORM\Column(name="TelephoneResidence", type="string", length=255)
     */
    private $telephoneResidence;

    /**
     * @ORM\OneToMany(targetEntity="TypeLogement", mappedBy="residence")
     */
    private $typelogements;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typelogements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomResidence
     *
     * @param string $nomResidence
     *
     * @return Residence
     */
    public function setNomResidence($nomResidence)
    {
        $this->nomResidence = $nomResidence;

        return $this;
    }

    /**
     * Get nomResidence
     *
     * @return string
     */
    public function getNomResidence()
    {
        return $this->nomResidence;
    }

    /**
     * Set adresseResidence
     *
     * @param string $adresseResidence
     *
     * @return Residence
     */
    public function setAdresseResidence($adresseResidence)
    {
        $this->adresseResidence = $adresseResidence;

        return $this;
    }

    /**
     * Get adresseResidence
     *
     * @return string
     */
    public function getAdresseResidence()
    {
        return $this->adresseResidence;
    }

    /**
     * Set telephoneResidence
     *
     * @param string $telephoneResidence
     *
     * @return Residence
     */
    public function setTelephoneResidence($telephoneResidence)
    {
        $this->telephoneResidence = $telephoneResidence;

        return $this;
    }

    /**
     * Get telephoneResidence
     *
     * @return string
     */
    public function getTelephoneResidence()
    {
        return $this->telephoneResidence;
    }

    /**
     * Add typelogement
     *
     * @param \Lefeto\ReservationBundle\Entity\TypeLogement $typelogement
     *
     * @return Residence
     */
    public function addTypelogement(\Lefeto\ReservationBundle\Entity\TypeLogement $typelogement)
    {
        $this->typelogements[] = $typelogement;

        return $this;
    }

    /**
     * Remove typelogement
     *
     * @param \Lefeto\ReservationBundle\Entity\TypeLogement $typelogement
     */
    public function removeTypelogement(\Lefeto\ReservationBundle\Entity\TypeLogement $typelogement)
    {
        $this->typelogements->removeElement($typelogement);
    }

    /**
     * Get typelogements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypelogements()
    {
        return $this->typelogements;
    }
}
