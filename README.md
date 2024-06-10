# Laravel Express 3 - Do Zero Ao Deploy

Bem-vindo ao projeto **Laravel Express 3 - Do Zero Ao Deploy**! Este repositório contém o código e a documentação para o desenvolvimento de uma aplicação Laravel, desde a configuração inicial até o deploy na AWS utilizando Terraform, EC2 e RDS. A aplicação inclui a construção de uma API, integração com Docker através do Laravel Sail e um front-end desenvolvido com Vue.js.

## Sumário

- [Introdução](#introdução)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Configuração](#configuração)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Utilização](#utilização)
- [Deploy na AWS](#deploy-na-aws)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Introdução

Este projeto tem como objetivo guiar o desenvolvedor por todo o processo de criação de uma aplicação Laravel completa, abordando os seguintes tópicos:

- Configuração do ambiente de desenvolvimento com Laravel Sail
- Desenvolvimento de uma API com Laravel
- Criação de um front-end com Vue.js
- Dockerização da aplicação com Laravel Sail
- Deploy na AWS utilizando Terraform, EC2 e RDS

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados em seu ambiente de desenvolvimento:

- Docker
- Docker Compose
- Conta na AWS
- Git

## Instalação

Siga os passos abaixo para clonar e configurar o projeto:

1. Clone o repositório:
    ```sh
    git clone https://github.com/seu-usuario/olw.git
    cd olw
    ```

2. Instale as dependências do Laravel utilizando o Laravel Sail:
    ```sh
    ./vendor/bin/sail up -d
    ```

3. Instale as dependências do Node.js:
    ```sh
    ./vendor/bin/sail npm install
    ```

## Configuração

1. Copie o arquivo `.env.example` para `.env`:
    ```sh
    cp .env.example .env
    ```

2. Gere a chave da aplicação Laravel:
    ```sh
    ./vendor/bin/sail php artisan key:generate
    ```

3. Configure o arquivo `.env` com as credenciais do seu banco de dados e outras variáveis de ambiente necessárias.

4. Execute as migrações para criar as tabelas do banco de dados:
    ```sh
    ./vendor/bin/sail php artisan migrate
    ```

## Estrutura do Projeto

A estrutura do projeto segue a convenção padrão do Laravel, com alguns diretórios adicionais para o front-end e configurações do Docker.

```
laravel-express3/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── js/
│   └── views/
├── routes/
├── storage/
├── tests/
├── docker-compose.yml
├── package.json
└── terraform/
```

## Utilização

Para iniciar o servidor de desenvolvimento, utilize o comando abaixo:

```sh
./vendor/bin/sail up
```

Para compilar os arquivos do front-end com o Vue.js, utilize:

```sh
./vendor/bin/sail npm run dev
```

## Deploy na AWS

1. **Configuração do Terraform:**

    Navegue até o diretório `terraform` e configure os arquivos `.tf` com suas credenciais e detalhes da AWS.

2. **Inicialização e Aplicação do Terraform:**

    ```sh
    terraform init
    terraform apply
    ```

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

1. Fork este repositório
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/nova-feature`)
5. Abra um Pull Request

## Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.
