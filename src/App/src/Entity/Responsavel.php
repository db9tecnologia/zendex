<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsavel
 *
 * @ORM\Table(name="responsavel")
 * @ORM\Entity
 */
class Responsavel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsavel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResponsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="ramal", type="string", length=45, nullable=true)
     */
    private $ramal;

    /**
     * @var string
     *
     * @ORM\Column(name="distribuidores", type="text", length=255, nullable=true)
     */
    private $distribuidores;


}

