<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferencias
 *
 * @ORM\Table(name="transferencias", uniqueConstraints={@ORM\UniqueConstraint(name="colunas", columns={"numero_nota_fiscal", "codigo_part_number_produto", "id_matriz", "tipo_movimento", "valor_unitario", "cnpj_distribuidor_filial"})}, indexes={@ORM\Index(name="idx_vendas_id_matriz_atualizado_em", columns={"id_matriz", "atualizado_em"})})
 * @ORM\Entity
 */
class Transferencias
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
     * @ORM\Column(name="data_emissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dataEmissao = '0';

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
     * @ORM\Column(name="numero_nota_fiscal", type="string", length=20, nullable=false)
     */
    private $numeroNotaFiscal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_produto", type="string", length=13, nullable=true)
     */
    private $codigoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=14, nullable=false)
     */
    private $cnpjDistribuidorFilial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_vendedor", type="string", length=11, nullable=true)
     */
    private $codigoVendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cliente", type="string", length=11, nullable=true)
     */
    private $cpfCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_cliente", type="string", length=14, nullable=true)
     */
    private $cnpjCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_faturamento", type="string", length=2, nullable=true)
     */
    private $tipoFaturamento;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_vendida", type="string", length=15, nullable=true)
     */
    private $quantidadeVendida;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="string", length=15, nullable=false)
     */
    private $valorUnitario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_bruto", type="string", length=15, nullable=true)
     */
    private $valorBruto;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_liquido", type="string", length=15, nullable=true)
     */
    private $valorLiquido;

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_icms", type="string", length=4, nullable=true)
     */
    private $percentualIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_movimento", type="string", length=2, nullable=false)
     */
    private $tipoMovimento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_part_number_produto", type="string", length=20, nullable=false)
     */
    private $codigoPartNumberProduto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="imei", type="string", length=16, nullable=true)
     */
    private $imei;

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
    private $consolidate;

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

