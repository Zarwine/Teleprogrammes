<?php

namespace App\Controller;

use App\Entity\Chronique;
use Doctrine\ORM\EntityManager;
use App\Entity\HoroscopeContent;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\HoroscopeContentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChroniqueController extends AbstractController
{
    /**
     * @Route("/horoscope/show/{id}", name="horoscope_show")
     */
    public function show(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $chronique = $entityManager->getRepository(Chronique::class)->find($id);

        if (!$chronique) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('chronique/index.html.twig', [
            'chronique' => $chronique,
            'controller_name' => 'ChroniqueController',
        ]);
    }

    /**
     * @Route("/horoscope/edit/{id}", name="horoscope_edit")
     */
    public function edit(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $chronique = $entityManager->getRepository(Chronique::class)->find($id);

        if (!$chronique) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $request = Request::createFromGlobals();
        
        $chronique->setCouple($request->request->get("votre_couple"));
        $chronique->setVie($request->request->get("votre_vie_solo"));
        $chronique->setConseils($request->request->get("conseils_amoureux"));
        $entityManager->persist($chronique);
        $entityManager->flush();

        return $this->redirectToRoute('app_home');
    }

    /**
     * @Route("/horoscope/suggest/{category}", name="horoscope_suggest")
     */
    public function suggest(string $category)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $suggests = $entityManager->getRepository(HoroscopeContent::class)->getRandom();

        $response = new Response(
            $suggests[$category],
            Response::HTTP_OK,
        );

        $session = new Session();
        $session->start();

        return $response->send();
    }
}
