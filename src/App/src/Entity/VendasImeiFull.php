<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VendasImeiFull
 *
 * @ORM\Table(name="vendas_imei_full", uniqueConstraints={@ORM\UniqueConstraint(name="id_imei_UNIQUE", columns={"id_imei", "data_emissao", "id_matriz"})}, indexes={@ORM\Index(name="id_matriz_nota_fiscal_INDEX", columns={"numero_nota_fiscal", "data_emissao", "codigo_part_number_produto", "id_matriz", "tipo_movimento", "imei"}), @ORM\Index(name="GI", columns={"id_matriz", "data_emissao", "tipo_movimento"})})
 * @ORM\Entity
 */
class VendasImeiFull
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_imei", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idImei;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_emissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dataEmissao = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matriz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="arquivo", type="string", length=150, nullable=true)
     */
    private $arquivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_nota_fiscal", type="integer", nullable=true)
     */
    private $numeroNotaFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_part_number_produto", type="string", length=20, nullable=true)
     */
    private $codigoPartNumberProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="imei", type="string", length=16, nullable=true)
     */
    private $imei;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordem", type="integer", nullable=true)
     */
    private $ordem;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_cpf", type="string", length=45, nullable=true)
     */
    private $cnpjCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=45, nullable=true)
     */
    private $cnpjDistribuidorFilial;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_movimento", type="string", length=2, nullable=true)
     */
    private $tipoMovimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exported", type="datetime", nullable=true)
     */
    private $exported;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_emissao", type="string", length=10, nullable=true)
     */
    private $horaEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_nota_fiscal_devolucao", type="string", length=20, nullable=true)
     */
    private $numeroNotaFiscalDevolucao;


}

