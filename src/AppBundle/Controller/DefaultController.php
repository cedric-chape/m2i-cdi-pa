<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $annonceRepo = $this->getDoctrine()->getRepository("AppBundle\Entity\Annonce");
        $annonceList = $annonceRepo->findAll();

        return $this->render(
            'default/index.html.twig', array(
                "annonceList"=> $annonceList
            )
        );
    }


}
