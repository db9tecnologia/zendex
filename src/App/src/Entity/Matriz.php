<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matriz
 *
 * @ORM\Table(name="matriz")
 * @ORM\Entity
 */
class Matriz
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
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=true)
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizadoEm;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_prm", type="string", length=14, nullable=true)
     */
    private $cnpjPrm;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=255, nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="bu", type="string", length=255, nullable=true)
     */
    private $bu;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=50, nullable=true)
     */
    private $uf;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=41, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="soldto_name", type="string", length=255, nullable=true)
     */
    private $soldtoName;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="sufixo", type="string", length=45, nullable=true)
     */
    private $sufixo;

    /**
     * @var integer
     *
     * @ORM\Column(name="layout", type="integer", nullable=true)
     */
    private $layout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dms", type="boolean", nullable=false)
     */
    private $dms = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prd", type="boolean", nullable=true)
     */
    private $prd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transf", type="boolean", nullable=false)
     */
    private $transf = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="child_id", type="integer", nullable=true)
     */
    private $childId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="weekend", type="boolean", nullable=false)
     */
    private $weekend = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_cnpj_ignore", type="text", length=65535, nullable=true)
     */
    private $clienteCnpjIgnore;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_cpf_ignore", type="text", length=65535, nullable=true)
     */
    private $clienteCpfIgnore;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpf_is_online", type="boolean", nullable=false)
     */
    private $cpfIsOnline = '0';


}

