<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Padrinho
 *
 * @ORM\Table(name="padrinho", indexes={@ORM\Index(name="fk_Padrinho_Pagina_Padrinho1_idx", columns={"pagina_padrinho_id"})})
 * @ORM\Entity
 */
class Padrinho extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=65535, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_foto", type="string", length=45, nullable=true)
     */
    private $caminhoFoto;

    /**
     * @var \PaginaPadrinho
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PaginaPadrinho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagina_padrinho_id", referencedColumnName="id")
     * })
     */
    private $paginaPadrinho;
    
    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCaminhoFoto() {
        return $this->caminhoFoto;
    }

    public function getPaginaPadrinho() {
        return $this->paginaPadrinho;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setCaminhoFoto($caminhoFoto) {
        $this->caminhoFoto = $caminhoFoto;
    }

    public function setPaginaPadrinho(\PaginaPadrinho $paginaPadrinho) {
        $this->paginaPadrinho = $paginaPadrinho;
    }




}
