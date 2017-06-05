<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeksBlue
 *
 * @ORM\Table(name="weeks_blue")
 * @ORM\Entity
 */
class WeeksBlue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="semana", type="string", length=10, nullable=true)
     */
    private $semana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio", type="date", nullable=true)
     */
    private $dataInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fim", type="date", nullable=true)
     */
    private $dataFim;

    /**
     * @var integer
     *
     * @ORM\Column(name="enviado", type="integer", nullable=false)
     */
    private $enviado;


}

