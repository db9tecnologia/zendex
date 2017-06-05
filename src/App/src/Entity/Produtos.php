<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produtos
 *
 * @ORM\Table(name="produtos", uniqueConstraints={@ORM\UniqueConstraint(name="chaves", columns={"pn"})}, indexes={@ORM\Index(name="pn", columns={"pn"}), @ORM\Index(name="ena", columns={"ean"}), @ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class Produtos
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
     * @ORM\Column(name="pn", type="string", length=50, nullable=true)
     */
    private $pn;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=50, nullable=true)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamilia1", type="string", length=50, nullable=true)
     */
    private $subfamilia1;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamilia2", type="string", length=50, nullable=true)
     */
    private $subfamilia2;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamilia3", type="string", length=50, nullable=true)
     */
    private $subfamilia3;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=50, nullable=true)
     */
    private $modelo;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorMin;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorMax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var boolean
     *
     * @ORM\Column(name="not_imei", type="boolean", nullable=true)
     */
    private $notImei = '0';


}

