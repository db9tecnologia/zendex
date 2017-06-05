<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstoqueBase
 *
 * @ORM\Table(name="estoque_base", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id", "data"}), @ORM\UniqueConstraint(name="colunas", columns={"data", "codigo_part_number_produto", "id_matriz", "cnpj_distribuidor_filial", "tipo_estoque"})}, indexes={@ORM\Index(name="data", columns={"data"}), @ORM\Index(name="pn", columns={"codigo_part_number_produto", "data"})})
 * @ORM\Entity
 */
class EstoqueBase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="data", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $data;

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
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=45, nullable=true)
     */
    private $grupo;


}

