# CRUD de Produtos - PHP Vanilla MVC

Projeto desenvolvido em PHP puro utilizando o padrão MVC (Model-View-Controller) e armazenamento de dados em JSON.

O objetivo deste projeto é praticar conceitos fundamentais de desenvolvimento backend sem depender de frameworks ou bancos de dados relacionais.

## Tecnologias

* PHP 8+
* HTML5
* CSS3
* JSON
* MVC

## Funcionalidades

* Listar produtos
* Cadastrar produtos
* Editar produtos
* Excluir produtos
* Persistência de dados utilizando arquivo JSON
* Estrutura MVC simples

## Estrutura do Projeto

```txt
crud-system/

app/
├── Controllers/
│   └── ProductController.php
│
├── Models/
│   └── Product.php
│
├── Views/
│   └── products/
│       ├── index.php
│       ├── create.php
│       └── edit.php
│
storage/
└── products.json

public/
└── index.php
```

## Como Executar

Clone o projeto:

```bash
git clone <url-do-repositorio>
```

Acesse a pasta:

```bash
cd crud-system
```

Inicie o servidor embutido do PHP:

```bash
php -S localhost:8000 -t public
```

Abra no navegador:

```txt
http://localhost:8000
```

## Rotas

| Rota                           | Descrição              |
| ------------------------------ | ---------------------- |
| ?route=products                | Listar produtos        |
| ?route=products/create         | Formulário de cadastro |
| ?route=products/store          | Salvar produto         |
| ?route=products/edit&id={id}   | Editar produto         |
| ?route=products/update&id={id} | Atualizar produto      |
| ?route=products/delete&id={id} | Excluir produto        |

## Estrutura do JSON

Exemplo de registro:

```json
{
  "id": 1,
  "nome": "Notebook Dell Inspiron",
  "preco": 3499.90,
  "estoque": 12,
  "descricao": "Notebook com processador Intel Core i5 e 8GB de RAM."
}
```

## Objetivo de Aprendizado

Este projeto foi criado para praticar:

* PHP Orientado a Objetos
* Padrão MVC
* Manipulação de arquivos JSON
* Rotas simples
* Formulários HTML
* CRUD completo
* Organização de código

## Melhorias Futuras

* Sistema de busca
* Paginação
* Validação de formulários
* Mensagens Flash
* Upload de imagens
* Banco de dados MySQL
* Composer e Autoload PSR-4
* Sistema de autenticação

## Licença

Projeto criado para fins de estudo e prática de desenvolvimento PHP.
