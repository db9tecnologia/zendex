<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuariosMatriz
 *
 * @ORM\Table(name="usuarios_matriz", indexes={@ORM\Index(name="id_matriz", columns={"id_matriz"})})
 * @ORM\Entity
 */
class UsuariosMatriz
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
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matriz", type="integer", nullable=true)
     */
    private $idMatriz;


}

