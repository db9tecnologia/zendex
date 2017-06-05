<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilesWeek
 *
 * @ORM\Table(name="files_week", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="arquivo", columns={"arquivo", "data", "id_matriz"})}, indexes={@ORM\Index(name="arquivo_w", columns={"arquivo"})})
 * @ORM\Entity
 */
class FilesWeek
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
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=150, nullable=true)
     */
    private $arquivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="data", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="week", type="string", length=45, nullable=true)
     */
    private $week;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizadoEm = 'CURRENT_TIMESTAMP';


}

