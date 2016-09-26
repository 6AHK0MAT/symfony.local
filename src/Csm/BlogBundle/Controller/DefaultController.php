<?php

namespace Csm\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CsmBlogBundle:Default:index.html.twig');
    }
}
