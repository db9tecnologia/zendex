<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=100, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=41, nullable=true)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10, nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';


}

