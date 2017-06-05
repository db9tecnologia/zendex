<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transit
 *
 * @ORM\Table(name="Transit")
 * @ORM\Entity
 */
class Transit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Matriz_Loja", type="integer", nullable=false)
     */
    private $idMatrizLoja;

    /**
     * @var string
     *
     * @ORM\Column(name="Region", type="string", length=2, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="PN", type="string", length=20, nullable=true)
     */
    private $pn;

    /**
     * @var integer
     *
     * @ORM\Column(name="Units", type="integer", nullable=true)
     */
    private $units;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="Base_week'", type="string", length=8, nullable=true)
     */
    private $baseWeek';


}

