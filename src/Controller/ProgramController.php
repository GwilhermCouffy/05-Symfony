<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
* @Route("/program", name="program_")
*/
class ProgramController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('/index.html.twig', [
            'website' => 'Wild Séries',
         ]);
    }

    /**
      * Correspond à la route /program/show et au name "program_show"
      *
      * @Route("/{id<\d+>}", methods={"GET"}, name="show")
      */
      public function show($id): Response
      {
        return $this->render('/program/show.html.twig', [
            'id' => $id,
         ]);
      }
}
