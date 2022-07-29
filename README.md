<p align="center">
  <img src="https://lookaside.fbsbx.com/lookaside/crawler/media/?media_id=188096171243220" alt="cworks_logo" height="120"/>
</p>
<h1 align="center">
  Convergence - Works
</h1>

<p align="center">
  <a href="https://www.linkedin.com/in/realeliakim/">
    <img alt="Linkedin" src="https://img.shields.io/badge/-Eliakim%20Aquino-0e76a8?label=Linkedin&logo=linkedin&style=flat-square"/>
  </a>
</p>

## :page_facing_up: Descrição

Desenvolver um relatório sobre a publicação de notícias. A aplicação deverá consumir a seguinte fonte de dados RSS [https://www.correio24horas.com.br/rss/] e entregar em formato JSON a quantidade e uma lista com o titulo (campo title) das notícias encontradas.


## :computer: Instalação

```bash

# Instalar todas as dependências do projeto
$ composer update

# Executar a aplicação
$ php artisan serve

#Executa os testes
$ vendor/bin/phpunit tests/Unit/NewsTest.php

```

## : Endpoints

Ultilizar Postman ou Insominia para verificar o retorno da API.

```bash

# Lista todos os títulos das notícias do dia e imprimi sua quantidade.
> [GET] /api/noticias

# Lista todas as categorias das notícias.
> [GET] /api/noticias/categorias

# Lista todas as notícias por categoria.
> [GET] /noticias/categorias/{categoria}

```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
