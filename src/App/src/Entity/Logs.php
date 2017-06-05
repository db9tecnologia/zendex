<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="logs", uniqueConstraints={@ORM\UniqueConstraint(name="log_id_UNIQUE", columns={"log_id"})}, indexes={@ORM\Index(name="user", columns={"user"}), @ORM\Index(name="file", columns={"file"}), @ORM\Index(name="system", columns={"system"}), @ORM\Index(name="system_user", columns={"system", "user"})})
 * @ORM\Entity
 */
class Logs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var string
     *
     * @ORM\Column(name="system", type="string", length=80, nullable=true)
     */
    private $system;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=100, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=180, nullable=true)
     */
    private $file;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=100, nullable=true)
     */
    private $cliente;


}

