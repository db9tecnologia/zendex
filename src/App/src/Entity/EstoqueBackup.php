<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstoqueBackup
 *
 * @ORM\Table(name="estoque_backup", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class EstoqueBackup
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
    private $idMatriz = '0';

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
     * @ORM\Column(name="codigo_produto", type="string", length=13, nullable=true)
     */
    private $codigoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=8, nullable=false)
     */
    private $data = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=45, nullable=true)
     */
    private $cnpjDistribuidorFilial;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_estoque", type="string", length=15, nullable=true)
     */
    private $quantidadeEstoque;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_estoque", type="string", length=2, nullable=true)
     */
    private $tipoEstoque;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_part_number_produto", type="string", length=20, nullable=true)
     */
    private $codigoPartNumberProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_revenda", type="string", length=14, nullable=true)
     */
    private $cnpjRevenda;

    /**
     * @var string
     *
     * @ORM\Column(name="prd_file", type="string", length=150, nullable=true)
     */
    private $prdFile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consolidate", type="boolean", nullable=true)
     */
    private $consolidate = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted", type="datetime", nullable=true)
     */
    private $deleted;


}

