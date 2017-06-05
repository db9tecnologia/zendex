<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrdHistorySend
 *
 * @ORM\Table(name="prd_history_send", uniqueConstraints={@ORM\UniqueConstraint(name="dms_history_id_UNIQUE", columns={"dms_history_id"})})
 * @ORM\Entity
 */
class PrdHistorySend
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dms_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dmsHistoryId;

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
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=45, nullable=true)
     */
    private $action;

    /**
     * @var boolean
     *
     * @ORM\Column(name="event", type="boolean", nullable=true)
     */
    private $event = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=2, nullable=true)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;


}

