<?php


namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokemonApiService
{
    private $client;
    private $apiBaseUrl;

    public function __construct(HttpClientInterface $client, string $apiBaseUrl)
    {
        $this->client = $client;
        $this->apiBaseUrl = $apiBaseUrl;
    }

    public function getPokemonCards(): array
    {
        $response = $this->client->request('GET', $this->apiBaseUrl . '/cards');
        return $response->toArray();
    }
    public function getPokemonDetailCards($id): array
    {
        $response = $this->client->request('GET', $this->apiBaseUrl . '/cards/' . $id);
        return $response->toArray();
    }
}
