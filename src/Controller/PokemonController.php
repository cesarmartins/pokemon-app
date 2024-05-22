<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PokemonApiService;

class PokemonController extends AbstractController
{
    private $pokemonApiService;

    public function __construct(PokemonApiService $pokemonApiService)
    {
        $this->pokemonApiService = $pokemonApiService;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $cards = $this->pokemonApiService->getPokemonCards();

        return $this->render('pokemon/index.html.twig', [
            'cards' => $cards,
        ]);
    }

    /**
     * @Route("/compare", name="compare_cards")
     */
    public function compare(): Response
    {
        $cards = $this->pokemonApiService->getPokemonCards();

        return $this->render('pokemon/compare.html.twig', [
            'cards' => $cards
        ]);
    }
}

