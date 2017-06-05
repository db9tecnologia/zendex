<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuariosEmail
 *
 * @ORM\Table(name="usuarios_email")
 * @ORM\Entity
 */
class UsuariosEmail
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disabled", type="boolean", nullable=false)
     */
    private $disabled = '0';


}

