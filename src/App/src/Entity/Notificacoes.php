<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificacoes
 *
 * @ORM\Table(name="notificacoes", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class Notificacoes
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
     * @var integer
     *
     * @ORM\Column(name="id_matriz", type="integer", nullable=true)
     */
    private $idMatriz;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="text", length=65535, nullable=true)
     */
    private $mensagem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;


}

