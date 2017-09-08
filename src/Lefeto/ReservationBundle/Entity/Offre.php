<?php

namespace Lefeto\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="Lefeto\ReservationBundle\Repository\OffreRepository")
 */
class Offre
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
     * @ORM\Column(name="LibelleOffre", type="string", length=255)
     */
    private $libelleOffre;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixUnitaireOffre", type="float")
     */
    private $prixUnitaireOffre;

    /**
     * @var int
     *
     * @ORM\Column(name="QuantiteOffre", type="integer")
     */
    private $quantiteOffre;
    /**
     * @ORM\ManyToOne(targetEntity="TypeLogement", inversedBy="offres")
     * @ORM\JoinColumn(name="typelogement_id", referencedColumnName="id")
     */
    private $typelogement;


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
     * Set libelleOffre
     *
     * @param string $libelleOffre
     *
     * @return Offre
     */
    public function setLibelleOffre($libelleOffre)
    {
        $this->libelleOffre = $libelleOffre;

        return $this;
    }

    /**
     * Get libelleOffre
     *
     * @return string
     */
    public function getLibelleOffre()
    {
        return $this->libelleOffre;
    }

    /**
     * Set prixUnitaireOffre
     *
     * @param float $prixUnitaireOffre
     *
     * @return Offre
     */
    public function setPrixUnitaireOffre($prixUnitaireOffre)
    {
        $this->prixUnitaireOffre = $prixUnitaireOffre;

        return $this;
    }

    /**
     * Get prixUnitaireOffre
     *
     * @return float
     */
    public function getPrixUnitaireOffre()
    {
        return $this->prixUnitaireOffre;
    }

    /**
     * Set quantiteOffre
     *
     * @param integer $quantiteOffre
     *
     * @return Offre
     */
    public function setQuantiteOffre($quantiteOffre)
    {
        $this->quantiteOffre = $quantiteOffre;

        return $this;
    }

    /**
     * Get quantiteOffre
     *
     * @return integer
     */
    public function getQuantiteOffre()
    {
        return $this->quantiteOffre;
    }

    /**
     * Set typelogement
     *
     * @param \Lefeto\ReservationBundle\Entity\TypeLogement $typelogement
     *
     * @return Offre
     */
    public function setTypelogement(\Lefeto\ReservationBundle\Entity\TypeLogement $typelogement = null)
    {
        $this->typelogement = $typelogement;

        return $this;
    }

    /**
     * Get typelogement
     *
     * @return \Lefeto\ReservationBundle\Entity\TypeLogement
     */
    public function getTypelogement()
    {
        return $this->typelogement;
    }
}
