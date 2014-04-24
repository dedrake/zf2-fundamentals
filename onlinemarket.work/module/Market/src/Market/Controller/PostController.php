<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{
    protected $categories;

    public function indexAction()
    {
        $viewModel = new ViewModel(array('categories' => $this->categories));
        $viewModel->setTemplate('market/post/invalid');
        return $viewModel;
    }

    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }
}