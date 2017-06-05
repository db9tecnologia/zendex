<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loja
 *
 * @ORM\Table(name="loja", uniqueConstraints={@ORM\UniqueConstraint(name="cnpj_UNIQUE", columns={"cnpj"}), @ORM\UniqueConstraint(name="loja_id_UNIQUE", columns={"loja_id"})}, indexes={@ORM\Index(name="cnpj_empresa_loja_INDEX", columns={"distribuidor_cnpj", "cnpj"}), @ORM\Index(name="cidade_INDEX", columns={"cidade"}), @ORM\Index(name="estado_IDNEX", columns={"estado"}), @ORM\Index(name="cidade_estado_INDEX", columns={"cidade", "estado"}), @ORM\Index(name="cnpj", columns={"cnpj"})})
 * @ORM\Entity
 */
class Loja
{
    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnpj;

    /**
     * @var integer
     *
     * @ORM\Column(name="loja_id", type="integer", nullable=false)
     */
    private $lojaId;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=180, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="distribuidor_cnpj", type="string", length=45, nullable=false)
     */
    private $distribuidorCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="text", length=65535, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="text", length=65535, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=180, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=180, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="sitio", type="text", length=65535, nullable=true)
     */
    private $sitio;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_sitio", type="string", length=25, nullable=true)
     */
    private $tipoSitio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prd", type="boolean", nullable=false)
     */
    private $prd = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=45, nullable=true)
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created = 'CURRENT_TIMESTAMP';


}

