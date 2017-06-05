<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arquivos
 *
 * @ORM\Table(name="arquivos", indexes={@ORM\Index(name="data", columns={"data"}), @ORM\Index(name="cnpj_distribuidor", columns={"cnpj_distribuidor"}), @ORM\Index(name="arquivo", columns={"arquivo"}), @ORM\Index(name="status", columns={"status", "cnpj_distribuidor"})})
 * @ORM\Entity
 */
class Arquivos
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_distribuidor", type="string", length=14, nullable=true)
     */
    private $cnpjDistribuidor;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=50, nullable=true)
     */
    private $arquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text", nullable=true)
     */
    private $conteudo;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;


}

