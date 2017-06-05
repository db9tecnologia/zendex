<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Confirmacao
 *
 * @ORM\Table(name="confirmacao", indexes={@ORM\Index(name="id_matriz", columns={"id_matriz"}), @ORM\Index(name="id_usuario", columns={"id_usuario"}), @ORM\Index(name="data", columns={"data"}), @ORM\Index(name="semana", columns={"semana"}), @ORM\Index(name="revalidar", columns={"revalidar"})})
 * @ORM\Entity
 */
class Confirmacao
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
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="semana", type="string", length=10, nullable=true)
     */
    private $semana;

    /**
     * @var string
     *
     * @ORM\Column(name="revalidar", type="string", length=45, nullable=true)
     */
    private $revalidar;


}

