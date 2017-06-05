<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfirmacaoArquivos
 *
 * @ORM\Table(name="confirmacao_arquivos", indexes={@ORM\Index(name="data", columns={"data"}), @ORM\Index(name="arquivo", columns={"arquivo"})})
 * @ORM\Entity
 */
class ConfirmacaoArquivos
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
     * @ORM\Column(name="id_confirmacao", type="integer", nullable=true)
     */
    private $idConfirmacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=true)
     */
    private $arquivo;


}

