<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weeks
 *
 * @ORM\Table(name="weeks", indexes={@ORM\Index(name="data", columns={"data"}), @ORM\Index(name="ano", columns={"ano"}), @ORM\Index(name="mes", columns={"mes"}), @ORM\Index(name="dia", columns={"dia"}), @ORM\Index(name="semana", columns={"semana"}), @ORM\Index(name="fulldate", columns={"ano", "mes", "dia"})})
 * @ORM\Entity
 */
class Weeks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=true)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="dia", type="integer", nullable=true)
     */
    private $dia;

    /**
     * @var string
     *
     * @ORM\Column(name="semana", type="string", length=10, nullable=true)
     */
    private $semana;


}

