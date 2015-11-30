<?php

namespace Dashboard\Entity;

use Application\Entity\Base\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaInicial
 *
 * @ORM\Table(name="pagina_inicial")
 * @ORM\Entity
 */
class PaginaInicial extends Entity
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
     * @var Video
     * @ORM\OneToOne(targetEntity="Video")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="video_id", referencedColumnName="id")
     * })
     */
    private $video;

    /**
     * @var \Casamento
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    
    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Foto", mappedBy="paginaInicial")
     * @ORM\JoinTable(name="Pagina_Inicial_Foto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pagina_inicial_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="foto_id", referencedColumnName="id")
     *   }
     * )
     */    
    private $foto;
    
    
    public function __construct() {
        $this->foto = new ArrayCollection();
    }
    
    public function getTexto() {
        return $this->texto;
    }

    public function getVideo() {
        return $this->video;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    public function setCasamento(Casamento $casamento) {
        $this->casamento = $casamento;
    }

    public function setFoto(Collection $foto) {
        $this->foto = $foto;
    }


    
    
}

