<?php

namespace Application\Helper;

use Zend\View\Helper\AbstractHelper;

class LeftLinks extends AbstractHelper
{
    public function __invoke($values, $urlPrefix)
    {
        return $this->render($values, $urlPrefix);
    }

    public function render($values, $urlPrefix)
    {
        $markupString = '<ul>';
        foreach($values as $value){
            $markupString .= '<li><a href="' . $urlPrefix . '/' .$value . '">' . $value . '</a></li>';
        }
        $markupString .= '</ul>';

        return $markupString;
    }
}