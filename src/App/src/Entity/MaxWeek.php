<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaxWeek
 *
 * @ORM\Table(name="max_week")
 * @ORM\Entity
 */
class MaxWeek
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
     * @ORM\Column(name="semana", type="string", length=10, nullable=true)
     */
    private $semana;


}

