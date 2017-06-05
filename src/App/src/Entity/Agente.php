<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agente
 *
 * @ORM\Table(name="agente", uniqueConstraints={@ORM\UniqueConstraint(name="chave", columns={"cnpj_cliente", "cnpj_distribuidor_filial", "cpf_cliente", "id_matriz"})})
 * @ORM\Entity
 */
class Agente
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
     * @ORM\Column(name="cnpj_agente", type="string", length=14, nullable=false)
     */
    private $cnpjAgente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_agente", type="string", length=11, nullable=true)
     */
    private $cpfAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="ddd_agente", type="string", length=4, nullable=true)
     */
    private $dddAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="fone_agente", type="string", length=20, nullable=true)
     */
    private $foneAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_agente", type="string", length=8, nullable=true)
     */
    private $cepAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="uf_agente", type="string", length=2, nullable=true)
     */
    private $ufAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade_agente", type="string", length=50, nullable=true)
     */
    private $cidadeAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_agente", type="string", length=75, nullable=true)
     */
    private $enderecoAgente;

    /**
     * @var string
     *
     * @ORM\Column(name="agente", type="string", length=50, nullable=true)
     */
    private $agente;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=14, nullable=true)
     */
    private $cnpjDistribuidorFilial;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_nota_fiscal", type="string", length=20, nullable=true)
     */
    private $numeroNotaFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="data_emissao", type="string", length=20, nullable=true)
     */
    private $dataEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_cliente", type="string", length=14, nullable=false)
     */
    private $cnpjCliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cliente", type="string", length=11, nullable=true)
     */
    private $cpfCliente;


}

