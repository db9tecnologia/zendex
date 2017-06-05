<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DadosFornecedor
 *
 * @ORM\Table(name="dados_fornecedor", uniqueConstraints={@ORM\UniqueConstraint(name="chaves", columns={"data", "codigo_part_number_produto", "id_matriz", "cnpj_distribuidor_filial"})})
 * @ORM\Entity
 */
class DadosFornecedor
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
     * @ORM\Column(name="codigo_produto", type="string", length=13, nullable=true)
     */
    private $codigoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=8, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=14, nullable=true)
     */
    private $cnpjDistribuidorFilial;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_compra", type="string", length=15, nullable=true)
     */
    private $quantidadeCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_part_number_produto", type="string", length=20, nullable=true)
     */
    private $codigoPartNumberProduto;


}

