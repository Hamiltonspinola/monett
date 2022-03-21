## Deafio Desenvolvedor Monnett

Este projeto acolhe um sistema com telas ações de CRUD, conforme os requisitos, bem como as rotas para excução da ApiRest


## Cadastrar 
1 - Executar o comando 'php artisan serve'
2 - Abrir o projeto no navergador com localhost:8000/register
3 - Cadastrar um usuario (Este usuario é admin)

## Logar

1 - Acessar a rota localhost:8000/login
2 - Logar com os dados cadastrados

- Cada rota mencionada abaixo contém um link no menu

## Painel administrativo

1 - Cadastrar Produto
2 - Cadastrar Pedido

## Cadastrar Produto

1 - Acessar rota localhost:8000/produtos/create
2 - Informar o nome e preço do produto

## Cadastrar Pedido

1 - Acessar rota localhost:8000/pedidos/create
2 - Escolher o produto, e quantidade desejada

## Listagem de pedidos

1 - Acessar rota localhost:8000/pedidos/

## Listagem de produtos

1 - Acessar rota localhost:8000/produtos/

## ApiRest - Os testes foram feitos via postman

## Clientes
1 - [
    1 - A rota localhost:8000/api/clientes/create cria um usuário
    2 - Esta rota deve ser requisita apenas com os parâmetros obrigatórios (nome, telefone, email, endereco)
    3 - Configurar o Header do postman para aceitar dados Json
    4 - Acessar através do Body da requisição, passando os parâmetros via Json
    5 - Acessa a rota via POST
] 

2 - [
    1 - A rota localhost:8000/api/clientes/show/{id} exibe um cliente específico, onde {id} representa o id do cliente
    2 - Esta rota exige o parâmetro de id para ser executada
    3 - Acessar via GET
]

3 - [
    1 - A rota localhost:8000/api/clientes/edit/{id} edita um cliente específico, onde {id} representa o id do cliente
    2 - Esta rota exige o parâmetro de id para ser executada
    3 - Acessar via PUT
]

4 - [
    1 - A rota localhost:8000/api/clientes/delete/{id} exclui um cliente específico, onde {id} representa o id do cliente
    2 - Esta rota exige o parâmetro de id para ser executada
    3 - Acessar via DELETE
]

## Pedidos

1 - [
    1 - A rota localhost:8000/api/pedidos/create/{clientId} cria um pedido , onde {clienteId} representa o id do cliente
    2 - Esta rota exige o parâmetro de clienteId para ser executada
    3 - Acessar via POST
]

2 - [
    1 - A rota localhost:8000/api/pedidos/show/{clientId}/{id} exibe um pedido específico, onde {clienteId} representa o id do cliente e {id} representa o id do pedido
    2 - Esta rota exige o parâmetro de clienteId e id para ser executada
    3 - Acessar via GET
]

3 - [
    1 - A rota localhost:8000/api/pedidos/edit/{clientId}/{id} edita um pedido específico, onde {clienteId} representa o id do cliente e {id} representa o id do pedido
    2 - Esta rota exige o parâmetro de clienteId e id para ser executada
    3 - Acessar via PUT
]

4 - [
    1 - A rota localhost:8000/api/pedidos/delete/{clientId}/{id} exclui um pedido específico, onde {clienteId} representa o id do cliente e {id} representa o id do pedido
    2 - Esta rota exige o parâmetro de clienteId e id para ser executada
    3 - Acessar via DELETE
]


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
