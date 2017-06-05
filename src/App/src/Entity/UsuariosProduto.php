<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuariosProduto
 *
 * @ORM\Table(name="usuarios_produto", indexes={@ORM\Index(name="produto", columns={"produto"}), @ORM\Index(name="id_usuario", columns={"id_usuario"}), @ORM\Index(name="usuario_produto", columns={"produto", "id_usuario"})})
 * @ORM\Entity
 */
class UsuariosProduto
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
     * @var string
     *
     * @ORM\Column(name="produto", type="string", length=255, nullable=true)
     */
    private $produto;


}

