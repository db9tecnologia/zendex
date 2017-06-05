<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendedor
 *
 * @ORM\Table(name="vendedor", uniqueConstraints={@ORM\UniqueConstraint(name="codigo", columns={"codigo_vendedor", "cnpj_distribuidor_filial", "id_matriz"})})
 * @ORM\Entity
 */
class Vendedor
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
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizadoEm;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=50, nullable=true)
     */
    private $arquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_vendedor", type="string", length=11, nullable=false)
     */
    private $codigoVendedor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nome_vendedor", type="string", length=50, nullable=true)
     */
    private $nomeVendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=14, nullable=true)
     */
    private $cnpjDistribuidorFilial;


}

