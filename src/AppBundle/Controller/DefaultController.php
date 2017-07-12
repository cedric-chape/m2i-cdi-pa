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
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function listAction(){
        $annonceRepo = $this->getDoctrine()->getRepository("Annonce");
        $annonceList = $annonceRepo->getAllAnnonces()->getArrayResult();

        return $this->render(
            'default/index.html.twig', array(
                "annonceList"=> $annonceList
            )
        );

    }
}
