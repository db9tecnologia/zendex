<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packs
 *
 * @ORM\Table(name="packs", uniqueConstraints={@ORM\UniqueConstraint(name="Chaves", columns={"id_matriz", "pack", "codigo_part_number_produto"}), @ORM\UniqueConstraint(name="pack_unico", columns={"id_matriz", "pack"})}, indexes={@ORM\Index(name="id_matriz", columns={"id_matriz"}), @ORM\Index(name="pack", columns={"pack"}), @ORM\Index(name="codigo_part_number", columns={"codigo_part_number_produto"}), @ORM\Index(name="matriz_pack", columns={"id_matriz", "pack"})})
 * @ORM\Entity
 */
class Packs
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
     * @var string
     *
     * @ORM\Column(name="pack", type="string", length=255, nullable=true)
     */
    private $pack;

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

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated = 'CURRENT_TIMESTAMP';


}

