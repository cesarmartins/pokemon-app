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

    public function comparar($id, $comparacao): Response
    {
        $cardInicio = $this->pokemonApiService->getPokemonDetailCards($id);
        $cardComparacao = $this->pokemonApiService->getPokemonDetailCards($comparacao);

        echo "pokemom $id:" . $primeiro = $cardInicio["card"]["hp"];
        echo "<br>";
        echo "pokemom $comparacao:" . $segundo = $cardComparacao["card"]["hp"];
        //echo "1" . $cardInicio["card"]["hp"];
        echo "<br>";
        if($primeiro > $segundo){
            echo "O $id Vence";
        }else{
            echo "O $comparacao Vence";
        }

        die();
        /*return $this->render('pokemon/detail.html.twig', [
            'card' => $card["card"],
        ]);*/
    }

}
