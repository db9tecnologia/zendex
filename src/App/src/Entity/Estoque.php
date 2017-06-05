<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estoque
 *
 * @ORM\Table(name="estoque", uniqueConstraints={@ORM\UniqueConstraint(name="chaves", columns={"data", "codigo_part_number_produto", "id_matriz", "cnpj_distribuidor_filial", "tipo_estoque", "codigo_produto", "cnpj_revenda", "arquivo"})}, indexes={@ORM\Index(name="id_matriz", columns={"id_matriz"}), @ORM\Index(name="data", columns={"data", "id_matriz"}), @ORM\Index(name="prd5", columns={"cnpj_distribuidor_filial", "codigo_part_number_produto", "data", "tipo_estoque"}), @ORM\Index(name="data_e", columns={"data"})})
 * @ORM\Entity
 */
class Estoque
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
     * @ORM\Column(name="id_matriz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMatriz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="data", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $data = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $arquivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizadoEm;

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
     * @var boolean
     *
     * @ORM\Column(name="consolidate", type="boolean", nullable=true)
     */
    private $consolidate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="regra", type="string", length=1, nullable=true)
     */
    private $regra;


}

