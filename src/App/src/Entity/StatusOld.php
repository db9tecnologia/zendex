<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="status")
 */
class Status 
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="arquivo", type="string", length=100)
     * @var string
     */
    private $arquivo;

    
    /**
     * @ORM\Column(name="status", type="boolean")
     * @var boolean
     */
    private $status;
    
    /**
     * @ORM\Column(name="hash", type="string", length=100)
     * @var string
     */
    private $hash;
    
    /**
     * @ORM\Column(name="id_matriz", type="integer", length=11)
     * @var integer
     */
    private $id_matriz;
    
    
    public function setId($id) {
        $this->id = $id;
        
        return $this;
    }
    
    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
        
        return $this;
    }
    
    public function setStatus($status) {
        $this->status = $status;
        
        return $this;
    }
    
    public function setHash($hash) {
        $this->hash = $hash;
        
        return $this;
    }
    
    public function setIdMatriz($id_matriz) {
        $this->id_matriz = $id_matriz;
        
        return $this;
    }
}