<?php

namespace Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProtecaoSenhaController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}