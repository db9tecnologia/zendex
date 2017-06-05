<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consolidate
 *
 * @ORM\Table(name="consolidate", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="grupo", columns={"grupo"}), @ORM\Index(name="a", columns={"a"}), @ORM\Index(name="b", columns={"b"})})
 * @ORM\Entity
 */
class Consolidate
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
     * @ORM\Column(name="grupo", type="string", length=45, nullable=false)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="a", type="string", length=45, nullable=false)
     */
    private $a;

    /**
     * @var string
     *
     * @ORM\Column(name="b", type="string", length=45, nullable=false)
     */
    private $b;


}

