<?php

namespace Dashboard\DAO;

use Application\DAO\DAOBase\DAOBase;

/**
 * Description of PaginaInicialSiteDAOImpl
 *
 * @author francis.oliveira
 */
class PaginaInicialSiteDAOImpl extends DAOBase implements PaginaInicialSiteDAO {
    private $repository = null;
    private $serviceLocator = null;
    
    public function __construct($serviceLocator) {        
        parent::__construct($serviceLocator->get("Doctrine\ORM\EntityManager"));
        $this->serviceLocator = $serviceLocator;
    } 
    /**
     * Retorna Uma entidade ou Null para o parametro passado.
     * @param type $id
     * @return type
     */
    public function getOneByCasamentoId($id) {
        try {
            return $this->getRepository()->findOneBy(array(
                        'casamento' => (int) $id,
            ));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }                
    }
    
    public function getRepository() {
        if ($this->repository === null) {
            $this->repository = $this->getEntityManager()
                    ->getRepository("\Dashboard\Entity\PaginaInicial");
        }
        return $this->repository;         
    }
}
