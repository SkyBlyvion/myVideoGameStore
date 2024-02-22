<?php

namespace App\Controller;

use App\Document\Jeu;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GameController extends AbstractController
{
    //document manager
    private $dm;
    public function __construct(DocumentManager $documentManager)
    {
        $this->dm = $documentManager; // injection globale de document manager
    }

    #[Route('/game', name: 'app_game', methods: ['GET'])]
    public function index(): Response
    {
        $jeux = $this->dm->getRepository(Jeu::class)->findAll();


        return $this->render('game/index.html.twig', [
            'controller_name' => 'GameController',
            'jeux' => $jeux
        ]);
    }

    #[Route('/addGame', name: 'app_game_add')]
    public function addGame(Request $request)
    {
        $game= new Jeu();
        $game->setTitre($request->get('titre'))
            ->setSynopsis($request->get('synopsis'))
            ->setPegi(intval($request->get('pegi')))
            ->setDate(new \DateTime());

        $this->dm->persist($game);
        $this->dm->flush();

        return $this->redirectToRoute('app_game');
    }
}
