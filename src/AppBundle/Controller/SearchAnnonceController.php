<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 12/07/2017
 * Time: 14:28
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class SearchAnnonceController
 * @package AppBundle\Controller
 * @Route("/search")
 */
class SearchAnnonceController extends Controller
{
    /**
     * @Route("/", name="search_home")
     */
    public function indexAction(){


        return $this->render(
            'AppBundle:Annonce:search.html.twig', array(

            )
        );
    }
}