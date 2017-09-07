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

}

