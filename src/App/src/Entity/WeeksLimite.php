<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeksLimite
 *
 * @ORM\Table(name="weeks_limite", uniqueConstraints={@ORM\UniqueConstraint(name="week_UNIQUE", columns={"semana"})}, indexes={@ORM\Index(name="semana_data", columns={"semana", "data"})})
 * @ORM\Entity
 */
class WeeksLimite
{
    /**
     * @var string
     *
     * @ORM\Column(name="semana", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $semana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="created_from", type="string", length=200, nullable=true)
     */
    private $createdFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_from", type="string", length=200, nullable=true)
     */
    private $modifiedFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=true)
     */
    private $modifiedDate;


}

