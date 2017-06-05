<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="chave_cpf", columns={"cnpj_distribuidor_filial", "cpf_cliente", "id_matriz"}), @ORM\UniqueConstraint(name="chave_cnpj", columns={"cnpj_distribuidor_filial", "id_matriz", "cnpj_cliente"})}, indexes={@ORM\Index(name="cnpj", columns={"cnpj_cliente", "id_matriz"}), @ORM\Index(name="cpf", columns={"cpf_cliente", "id_matriz"}), @ORM\Index(name="max", columns={"cliente", "endereco_cliente", "cidade_cliente", "bairro", "uf_cliente", "cep_cliente"}), @ORM\Index(name="id", columns={"cnpj_cliente", "cliente", "endereco_cliente", "cidade_cliente", "bairro", "uf_cliente", "cep_cliente"})})
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="cnpj_cliente", type="string", length=14, nullable=true)
     */
    private $cnpjCliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cliente", type="string", length=11, nullable=true)
     */
    private $cpfCliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ddd_cliente", type="string", length=4, nullable=true)
     */
    private $dddCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="fone_cliente", type="string", length=20, nullable=true)
     */
    private $foneCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_cliente", type="string", length=8, nullable=true)
     */
    private $cepCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="uf_cliente", type="string", length=2, nullable=true)
     */
    private $ufCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade_cliente", type="string", length=50, nullable=true)
     */
    private $cidadeCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_cliente", type="string", length=75, nullable=true)
     */
    private $enderecoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=50, nullable=true)
     */
    private $cliente;

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
     * @ORM\Column(name="classificacao", type="string", length=100, nullable=true)
     */
    private $classificacao;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=180, nullable=true)
     */
    private $bairro;


}

