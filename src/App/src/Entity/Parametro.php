<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametro
 *
 * @ORM\Table(name="parametro")
 * @ORM\Entity
 */
class Parametro
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
     * @ORM\Column(name="module", type="string", length=45, nullable=true)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="parametro", type="string", length=45, nullable=true)
     */
    private $parametro;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="text", nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="atualizado_em", type="string", length=10, nullable=true)
     */
    private $atualizadoEm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matriz", type="integer", nullable=true)
     */
    private $idMatriz;


}

