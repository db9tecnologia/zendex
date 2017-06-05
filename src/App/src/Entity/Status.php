<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status", uniqueConstraints={@ORM\UniqueConstraint(name="Chaves", columns={"arquivo"}), @ORM\UniqueConstraint(name="unico_hash", columns={"hash"})}, indexes={@ORM\Index(name="id_matriz", columns={"id_matriz"}), @ORM\Index(name="atualizado_em", columns={"atualizado_em"}), @ORM\Index(name="arquivo", columns={"arquivo"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="query", columns={"id_matriz", "status", "atualizado_em"})})
 * @ORM\Entity
 */
class Status {

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
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizadoEm;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=50, nullable=true)
     */
    private $arquivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vendas", type="boolean", nullable=true)
     */
    private $vendas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estoque", type="boolean", nullable=true)
     */
    private $estoque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transferencias", type="boolean", nullable=true)
     */
    private $transferencias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cliente", type="boolean", nullable=true)
     */
    private $cliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vendedor", type="boolean", nullable=true)
     */
    private $vendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=200, nullable=true)
     */
    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="datas", type="array", length=65535, nullable=true)
     */
    private $datas;

    public function getAtualizadoEm() {
        if (!($this->atualizadoEm instanceof \DateTime)) {
            return new \DateTime();
        }

        return $this->atualizadoEm;
    }

    public function getArquivo() {
        return $this->arquivo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getHash() {
        return $this->hash;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function getVendas() {
        return $this->vendas;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function getDatas() {
        return $this->datas;
    }

    public function getTransferencias() {
        return $this->transferencias;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function setIdMatriz($idMatriz) {
        $this->idMatriz = $idMatriz;

        return $this;
    }

    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;

        return $this;
    }

    public function setHash($hash) {
        $this->hash = $hash;

        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    public function setAtualizadoEm($atualizadoEm) {
        $this->atualizadoEm = $atualizadoEm;

        return $this;
    }

}
