<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResumoDados
 *
 * @ORM\Table(name="resumo_dados", uniqueConstraints={@ORM\UniqueConstraint(name="resumo_dados_id_UNIQUE", columns={"resumo_dados_id"}), @ORM\UniqueConstraint(name="index3", columns={"distribuidor", "data_dados"})}, indexes={@ORM\Index(name="index4", columns={"distribuidor", "data_dados", "data_atualizacao"}), @ORM\Index(name="index5", columns={"data_atualizacao", "data_dados"})})
 * @ORM\Entity
 */
class ResumoDados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resumo_dados_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resumoDadosId;

    /**
     * @var integer
     *
     * @ORM\Column(name="distribuidor", type="integer", nullable=false)
     */
    private $distribuidor;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_dados", type="integer", nullable=false)
     */
    private $dataDados;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_atualizacao", type="datetime", nullable=true)
     */
    private $dataAtualizacao;


}

