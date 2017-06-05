<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transito
 *
 * @ORM\Table(name="transito", uniqueConstraints={@ORM\UniqueConstraint(name="Chaves", columns={"id_matriz", "data", "codigo_part_number_produto"})}, indexes={@ORM\Index(name="data_INDEX", columns={"data"})})
 * @ORM\Entity
 */
class Transito
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
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_part_number_produto", type="string", length=20, nullable=true)
     */
    private $codigoPartNumberProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtd", type="integer", nullable=true)
     */
    private $qtd;


}

