<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Search controller.
 *
 * @Route("search")
 */
class SearchController extends Controller
{
    /**
     * search index.
     *
     * @Route("/", name="search_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('search/index.html.twig');
    }
}
