<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArquivoStatus
 *
 * @ORM\Table(name="arquivo_status", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class ArquivoStatus
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
     * @ORM\Column(name="id_matriz", type="integer", nullable=false)
     */
    private $idMatriz;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=false)
     */
    private $atualizadoEm = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=180, nullable=false)
     */
    private $arquivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vendas", type="boolean", nullable=true)
     */
    private $vendas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estoque", type="boolean", nullable=true)
     */
    private $estoque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vendedor", type="boolean", nullable=true)
     */
    private $vendedor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cliente", type="boolean", nullable=true)
     */
    private $cliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

