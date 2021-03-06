<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DmsListCreate
 *
 * @ORM\Table(name="dms_list_create", uniqueConstraints={@ORM\UniqueConstraint(name="dms_history_id_UNIQUE", columns={"dms_list_create_id"})}, indexes={@ORM\Index(name="index3", columns={"cron"})})
 * @ORM\Entity
 */
class DmsListCreate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dms_list_create_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dmsListCreateId;

    /**
     * @var string
     *
     * @ORM\Column(name="cron", type="string", length=150, nullable=false)
     */
    private $cron;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=150, nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

