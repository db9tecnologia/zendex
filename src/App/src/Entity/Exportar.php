<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exportar
 *
 * @ORM\Table(name="exportar", uniqueConstraints={@ORM\UniqueConstraint(name="Chaves", columns={"client", "partnumber", "type", "uf", "data", "movement_type", "channel", "loja"})})
 * @ORM\Entity
 */
class Exportar
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
     * @ORM\Column(name="channel", type="string", length=55, nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=55, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=255, nullable=true)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="sub", type="string", length=255, nullable=true)
     */
    private $sub;

    /**
     * @var string
     *
     * @ORM\Column(name="loja", type="string", length=255, nullable=true)
     */
    private $loja;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=55, nullable=true)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="bu", type="string", length=55, nullable=true)
     */
    private $bu;

    /**
     * @var string
     *
     * @ORM\Column(name="partnumber", type="string", length=255, nullable=true)
     */
    private $partnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="product_type", type="string", length=255, nullable=true)
     */
    private $productType;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamily1", type="string", length=255, nullable=true)
     */
    private $subfamily1;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamily2", type="string", length=255, nullable=true)
     */
    private $subfamily2;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamily3", type="string", length=255, nullable=true)
     */
    private $subfamily3;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=10, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=2, nullable=true)
     */
    private $uf;

    /**
     * @var integer
     *
     * @ORM\Column(name="units", type="integer", nullable=true)
     */
    private $units;

    /**
     * @var string
     *
     * @ORM\Column(name="movement_type", type="string", length=2, nullable=true)
     */
    private $movementType;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor_filial", type="string", length=45, nullable=true)
     */
    private $cnpjDistribuidorFilial;


}

