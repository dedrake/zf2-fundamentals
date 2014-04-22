<?php

namespace Market\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ViewController extends AbstractActionController
{
    public function indexAction()
    {
        $viewModel = new ViewModel(array('listings' => 'LIST OF ITEMS'));
        return $viewModel;
    }

    public function itemAction()
    {
        $category = $this->params()->fromQuery('category');
        if(!category){
            $this->flashMessenger()->addMessage('Item Not Found');
            return $this->redirect()->toRoute('market');
        }
        $viewModel = new ViewModel(array('category' => $category));
        return $viewModel;
    }
}