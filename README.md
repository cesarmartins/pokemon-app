# pokemon-app

Este é um projeto pratico de uma aplicação web PHP utilizando o 
Symfony para consumir a API do Pokémon TCG e exibir cartas de Pokémon.

## Configuração

1. Clone o repositório:

```bash
git clone https://github.com/cesarmartins/pokemon-app.git 
```

2. Instale as dependências via Composer:

```bash
composer install
```

3. Execução
Para executar a aplicação, você pode utilizar o servidor web embutido do Symfony:

```bash
symfony serve
```

## Testes

Para executar os testes unitários (PHPUnit) na aplicação:

1. você precisará instalar o PHPUnit, caso ainda não tenha feito isso:
```bash
composer require --dev phpunit/phpunit
```
2. basta executar o seguinte comando no terminal:
```bash
./vendor/bin/phpunit
```
Obs. Certifique-se de estar no diretório raiz do seu projeto ao executar este comando.


## Autor

* **César Martins** - *GitHub* - [cesarmartins](https://github.com/cesarmartins)