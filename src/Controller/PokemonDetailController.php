<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PokemonApiService;

class PokemonDetailController extends AbstractController
{
    private $pokemonApiService;

    public function __construct(PokemonApiService $pokemonApiService)
    {
        $this->pokemonApiService = $pokemonApiService;
    }

    /**
     * @Route("/pokemon/{id}", name="pokemon_detail")
     */
    public function index($id): Response
    {
        $card = $this->pokemonApiService->getPokemonDetailCards($id);

        return $this->render('pokemon/detail.html.twig', [
            'card' => $card["card"],
        ]);
    }
}
