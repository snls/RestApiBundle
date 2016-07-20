<?php

namespace RestAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("api/")
     */
    public function indexAction()
    {
        return $this->render('RestAPIBundle:Default:index.html.twig');
    }
}
