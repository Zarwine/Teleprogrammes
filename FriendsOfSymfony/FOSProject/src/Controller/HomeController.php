<?php

namespace App\Controller;

use App\Entity\Chronique;
use App\Repository\ChroniqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $chroniques = $this->getDoctrine()
            ->getManager()
            ->getRepository('App:Chronique')
            ->findAll();

        if (!$chroniques) {
            throw $this->createNotFoundException(
                "Aucun horoscope trouvé"
            );
        }
        return $this->render("home/home.html.twig",[
            "chroniques" => $chroniques,
        ]);
    }
    /**
     * @Route("/horoscope", name="app_horoscope")
     */
    public function horoscope(): Response
    {
        $chroniques = $this->getDoctrine()
            ->getManager()
            ->getRepository('App:Chronique')
            ->findAll();

        if (!$chroniques) {
            throw $this->createNotFoundException(
                "Aucun horoscope trouvé"
            );
        }
        return $this->render("home/horoscope.html.twig",[
            "chroniques" => $chroniques,
        ]);
    }
}