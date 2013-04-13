<?php

namespace Demo\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('DemoBlogBundle:Page:index.html.twig');
    }
}
