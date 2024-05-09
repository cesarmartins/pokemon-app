<?php


namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use App\Service\PokemonApiService;

class PokemonApiServiceTest extends KernelTestCase
{
    public function testGetPokemonCards(): void
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('toArray')
            ->willReturn(['cards' => [['name' => 'Pikachu']]]);

        $httpClientMock = $this->createMock(HttpClientInterface::class);
        $httpClientMock->method('request')
            ->willReturn($responseMock);

        $apiService = new PokemonApiService($httpClientMock, 'https://api.pokemontcg.io/v1/cards');
        $cards = $apiService->getPokemonCards();

        $this->assertCount(1, $cards);
        $this->assertEquals('Pikachu', $cards["cards"][0]['name']);
    }
}
