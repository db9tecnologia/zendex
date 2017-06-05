<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportacaoLog
 *
 * @ORM\Table(name="importacao_log", uniqueConstraints={@ORM\UniqueConstraint(name="id_impor_log_UNIQUE", columns={"id_impor_log"})}, indexes={@ORM\Index(name="impor_log_INDEX_KEy", columns={"atualizado_em", "status", "id_matriz", "arquivo"})})
 * @ORM\Entity
 */
class ImportacaoLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_impor_log", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImporLog;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matriz", type="integer", nullable=false)
     */
    private $idMatriz;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizadoEm = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=200, nullable=false)
     */
    private $arquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo = 'auto';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';


}

