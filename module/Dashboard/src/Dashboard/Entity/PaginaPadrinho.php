<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaPadrinho
 *
 * @ORM\Table(name="pagina_padrinho", indexes={@ORM\Index(name="fk_Padrinhos_Casamento", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaPadrinho extends Application\Entity\Base\Entity
{
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="NONE")
//     */
//    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="publicar_pagina", type="boolean", nullable=false)
     */
    private $publicarPagina;

    /**
     * @var \Casamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    public function getTexto() {
        return $this->texto;
    }

    public function getPublicarPagina() {
        return $this->publicarPagina;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setPublicarPagina($publicarPagina) {
        $this->publicarPagina = $publicarPagina;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}
