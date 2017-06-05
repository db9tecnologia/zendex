<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeapSellthruInventory
 *
 * @ORM\Table(name="heap_sellthru_inventory", uniqueConstraints={@ORM\UniqueConstraint(name="row_UNIQUE", columns={"produto_pn", "loja_cnpj", "data"})})
 * @ORM\Entity
 */
class HeapSellthruInventory
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
     * @ORM\Column(name="matriz_nome", type="string", length=150, nullable=true)
     */
    private $matrizNome;

    /**
     * @var string
     *
     * @ORM\Column(name="loja_cnpj", type="string", length=45, nullable=true)
     */
    private $lojaCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=45, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="produto_ean", type="string", length=45, nullable=true)
     */
    private $produtoEan;

    /**
     * @var string
     *
     * @ORM\Column(name="produto_pn", type="string", length=45, nullable=true)
     */
    private $produtoPn;

    /**
     * @var integer
     *
     * @ORM\Column(name="venda", type="integer", nullable=false)
     */
    private $venda;

    /**
     * @var integer
     *
     * @ORM\Column(name="estoque", type="integer", nullable=false)
     */
    private $estoque;

    /**
     * @var string
     *
     * @ORM\Column(name="produto_type", type="string", length=45, nullable=true)
     */
    private $produtoType;

    /**
     * @var string
     *
     * @ORM\Column(name="loja_local", type="string", length=200, nullable=true)
     */
    private $lojaLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="loja_cidade", type="string", length=200, nullable=true)
     */
    private $lojaCidade;

    /**
     * @var string
     *
     * @ORM\Column(name="loja_tipo_local", type="string", length=100, nullable=true)
     */
    private $lojaTipoLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="loja_uf", type="string", length=45, nullable=true)
     */
    private $lojaUf;

    /**
     * @var string
     *
     * @ORM\Column(name="data_export", type="string", length=45, nullable=true)
     */
    private $dataExport;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_export", type="string", length=45, nullable=true)
     */
    private $horaExport;


}

