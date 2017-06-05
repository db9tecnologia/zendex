<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeapSellthruVarejo
 *
 * @ORM\Table(name="heap_sellthru_varejo", uniqueConstraints={@ORM\UniqueConstraint(name="Chaves", columns={"EANCode", "SECModelCode", "PartnerCode"})})
 * @ORM\Entity
 */
class HeapSellthruVarejo
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
     * @ORM\Column(name="SECOrg", type="string", length=55, nullable=true)
     */
    private $secorg;

    /**
     * @var string
     *
     * @ORM\Column(name="PartnerCode", type="string", length=55, nullable=true)
     */
    private $partnercode;

    /**
     * @var string
     *
     * @ORM\Column(name="PartnerCodeType", type="string", length=55, nullable=true)
     */
    private $partnercodetype;

    /**
     * @var string
     *
     * @ORM\Column(name="PartnerLocation", type="string", length=55, nullable=true)
     */
    private $partnerlocation;

    /**
     * @var string
     *
     * @ORM\Column(name="PartnerCode_2nd", type="string", length=55, nullable=true)
     */
    private $partnercode2nd;

    /**
     * @var string
     *
     * @ORM\Column(name="PartnerCodeType_2nd", type="string", length=55, nullable=true)
     */
    private $partnercodetype2nd;

    /**
     * @var string
     *
     * @ORM\Column(name="PartnerModelCode", type="string", length=55, nullable=true)
     */
    private $partnermodelcode;

    /**
     * @var string
     *
     * @ORM\Column(name="EANCode", type="string", length=55, nullable=true)
     */
    private $eancode;

    /**
     * @var string
     *
     * @ORM\Column(name="SECModelCode", type="string", length=55, nullable=true)
     */
    private $secmodelcode;

    /**
     * @var string
     *
     * @ORM\Column(name="DataStream", type="string", length=55, nullable=true)
     */
    private $datastream;

    /**
     * @var string
     *
     * @ORM\Column(name="DataSubStream", type="string", length=55, nullable=true)
     */
    private $datasubstream;

    /**
     * @var string
     *
     * @ORM\Column(name="DateType", type="string", length=55, nullable=true)
     */
    private $datetype;

    /**
     * @var string
     *
     * @ORM\Column(name="ActualDate", type="string", length=55, nullable=true)
     */
    private $actualdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="Amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="Currency", type="string", length=55, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="RefNo", type="string", length=55, nullable=true)
     */
    private $refno;

    /**
     * @var string
     *
     * @ORM\Column(name="AgentCode", type="string", length=55, nullable=true)
     */
    private $agentcode;

    /**
     * @var string
     *
     * @ORM\Column(name="DataFlag", type="string", length=55, nullable=true)
     */
    private $dataflag;

    /**
     * @var string
     *
     * @ORM\Column(name="ETC1", type="string", length=55, nullable=true)
     */
    private $etc1;

    /**
     * @var string
     *
     * @ORM\Column(name="ETC2", type="string", length=55, nullable=true)
     */
    private $etc2;

    /**
     * @var string
     *
     * @ORM\Column(name="ETC3", type="string", length=55, nullable=true)
     */
    private $etc3;

    /**
     * @var string
     *
     * @ORM\Column(name="DateCreated", type="string", length=55, nullable=true)
     */
    private $datecreated;


}

