<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatrizPrdCron
 *
 * @ORM\Table(name="matriz_prd_cron", uniqueConstraints={@ORM\UniqueConstraint(name="idmatriz_dms_config_id_UNIQUE", columns={"matriz_prd_cron_id"})})
 * @ORM\Entity
 */
class MatrizPrdCron
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matriz_prd_cron_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matrizPrdCronId;

    /**
     * @var string
     *
     * @ORM\Column(name="id_matriz", type="string", length=45, nullable=true)
     */
    private $idMatriz;

    /**
     * @var boolean
     *
     * @ORM\Column(name="frequencia", type="boolean", nullable=false)
     */
    private $frequencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dia_inicio_semana", type="boolean", nullable=true)
     */
    private $diaInicioSemana;

    /**
     * @var string
     *
     * @ORM\Column(name="dia", type="string", length=50, nullable=true)
     */
    private $dia;

    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=5, nullable=true)
     */
    private $hora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="intervalo", type="boolean", nullable=true)
     */
    private $intervalo;

    /**
     * @var string
     *
     * @ORM\Column(name="semanas", type="string", length=250, nullable=true)
     */
    private $semanas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

